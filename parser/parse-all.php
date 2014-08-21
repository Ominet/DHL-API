<?php
function cli($msg) { echo '[' . date('Y-m-d H:i:s') . '] - ' . $msg . PHP_EOL; }

$folder = __DIR__ . '/xsd/' . $_SERVER['argv'][1] . '/';
$cache = array();
$xsdFile = $folder . 'datatypes.xsd';

$simpleDef = processSimpleDefinition($xsdFile);
$complexDef  = processComplexDefinition($xsdFile);

var_dump($complexDef); die();

foreach (new DirectoryIterator($folder) as $fileInfo) 
{
    if($fileInfo->isDot()) 
            continue;

    cli('Parsing xsd : ' . $fileInfo->getFilename());

    $result =  process($folder . $fileInfo->getFilename(), $simpleDef, $complexDef, $fileInfo->getFilename());

    if ($result) 
    {
        $cache = array_merge($cache, $result);
    }
}

function processSimpleDefinition($file = 'xsd/datatypes_global.xsd')
{
    $string = file_get_contents($file);
    $string = str_replace('xsd:', '', $string);
    $xml = simplexml_load_string($string);

    $result = array();
    foreach ($xml->simpleType as $element) 
    {
        $values = array();
        $values['name'] = (string) $element['name'];
        $values['restriction'] = isset($element->restriction) ? (string) $element->restriction['base'] : null;
        $values['comment'] = addslashes(trim((string) $element->annotation->documentation));
        if (isset($element->restriction)) 
        {
            foreach ($element->restriction->children() as $restriction) 
            {
                if (isset($values['restrictionDetails'][(string) $restriction->getName()]))
                {
                    $values['restrictionDetails'][(string) $restriction->getName()] .= ',' . (string) $restriction['value'];
                }
                else
                {
                    $values['restrictionDetails'][(string) $restriction->getName()] = (string) $restriction['value'];
                }
            }

        }
        else $values['restrictionDetails'] = array();
       
        $result[$values['name']] = $values;
    }

    return $result;
}

function processComplexDefinition($file = 'xsd/datatypes_global.xsd')
{
    $string = file_get_contents($file);
    $string = str_replace('xsd:', '', $string);
    $xml = simplexml_load_string($string);

    $result = array();
    foreach ($xml->complexType as $element) 
    {
        $values = array();
        $values['name'] = (string) $element['name'];
        foreach ($element->sequence->element as $subElement)
        {
            $values['elements'][(string) $subElement['name']] = (string) $subElement['type'];
        }

        $result[$values['name']] = $values;
    }

    return $result;
}

function doElement($element, $optional = false) 
{
    $values = array();

    $values['key'] = (string) $element['name'];
    $values['required'] = !$optional && isset($element['minOccurs']) && (string) $element['minOccurs'] != "0";
    $values['minOccurs'] = isset($element['minOccurs']) ? $element['minOccurs'] : 0;
    $values['maxOccurs'] = isset($element['maxOccurs']) ? $element['maxOccurs'] : 0;

    $values['subobject'] = isset($element->complexType);
    $values['type'] = (string) $element['name']; 
    
    if (isset($element->complexType)) { echo $values['key'] . PHP_EOL . PHP_EOL; }

    if (isset($element->simpleType->restriction)) {
        if (isset($element->simpleType->restriction->annotation->documentation)) 
                $values['comment'] = (string) $element->simpleType->annotation->documentation;

        foreach ($element->simpleType->restriction->children() as $restriction) 
        {
            if (isset($values['restrictionDetails'][(string) $restriction->getName()]))
            {
                $values['restrictionDetails'][(string) $restriction->getName()] .= ',' . (string) $restriction['value'];
            }
            else
            {
                $values['restrictionDetails'][(string) $restriction->getName()] = (string) $restriction['value'];
            }
        }
    }
    
    return $values;
}

function process($file, $definition, $complexDef, $filename) 
{
    $string = file_get_contents($file);
    $string = str_replace('xsd:', '', $string);
    $xml = simplexml_load_string($string);

    if (!$xml) 
            return false;

    $service = (string) $xml->element['name'];
    $className = str_replace($_SERVER['argv'][1], '', $service);

    $result[$service] = array();
    
    if (!isset($xml->element->complexType->sequence->element)) 
    {
        return;
    }

    foreach ($xml->element->complexType->sequence->children() as $children) 
    {
        if ($children->getName() == 'element') {
            $element = $children;
        }
        elseif ($children->getName() == 'choice') {
            foreach ($children->element as $element) 
            {
                $key = (string) $element['name'];
                $arr[$key] = doElement($element, true);
            }   
            continue;
        }

        if ((string) $element['name'] == 'Request')
            continue;

        $key = (string) $element['name'];
        $arr[$key] = doElement($element);
    }
    
    ob_start();    
    echo '<?php' . PHP_EOL;
?>
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        <?php echo $className; ?>.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\<?php echo $_SERVER['argv'][1]; ?>; 
use DHL\Entity\Base;

/**
 * <?php echo $className; ?> Request model for DHL API
 */
class <?php echo $className; ?> extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = '<?php echo $service; ?>';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = '<?php echo $service; ?>.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
<?php
foreach ($arr as $name => $infos) 
{ ?>
        '<?php echo $infos['key']; ?>' => array(
            'type' => '<?php echo isset($complexDef[$infos['key']]) ? $infos['key'] : 'string'; ?>',
            'required' => <?php echo $infos['required'] ? 'true' : 'false'; ?>,
            'subobject' => <?php echo $infos['subobject'] || isset($complexDef[$infos['key']]) ? 'true' : 'false'; ?>,
            'multivalues' => <?php echo ($infos['maxOccurs'] > 1) ? 'true' : 'false'; ?>,
<?php
if (isset($infos['comment']))  
            echo "            'comment' => '" . $infos['comment'] . "'," . PHP_EOL; 
elseif (isset($definition[$infos['key']]['comment']))  
            echo "            'comment' => '" . $definition[$infos['key']]['comment'] . "'," . PHP_EOL; 

if (isset($infos['restrictionDetails'])) { foreach ($infos['restrictionDetails'] as $k => $v) 
            echo "            '$k' => '$v'," . PHP_EOL; 
}            
elseif (isset($definition[$infos['key']]['restrictionDetails'])) { foreach ($definition[$infos['key']]['restrictionDetails'] as $k => $v) 
            echo "            '$k' => '$v'," . PHP_EOL; } ?>
        ), 
<?php } ?>
    );
}
<?
    $class = ob_get_contents();
    ob_end_clean();
    $filename = __DIR__ . '/generated/' . $_SERVER['argv'][1] . '/' . $className . '.php';
    cli('generating class : ' . $filename);
//ECHO $class; 

    file_put_contents($filename, $class);
}
