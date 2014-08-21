<?php
function cli($msg) { echo '[' . date('Y-m-d H:i:s') . '] - ' . $msg . PHP_EOL; }

$folder = __DIR__ . '/xsd/' . $_SERVER['argv'][1] . '/';
$cache = array();
$xsdFile = $folder . 'datatypes.xsd';

$simpleDef = processSimpleDefinition($xsdFile);
$complexDef  = processComplexDefinition($xsdFile);

foreach ($complexDef as $name => $infos) 
{
    process($name, $infos, $simpleDef, $complexDef);
}

function processSimpleDefinition($file = 'xsd/datatypes.xsd')
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
        if ($values['restriction']) 
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

function processComplexDefinition($file = 'xsd/datatypes.xsd')
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
            $minOccurs = isset($subElement['minOccurs']) ? $subElement['minOccurs'] : false;
            $values['elements'][(string) $subElement['name']] = array('type' => (string) $subElement['type'], 'minOccurs' => $minOccurs);
        }

        $result[$values['name']] = $values;
    }

    return $result;
}



function process($name, $arr, $definition, $complexDef)
{
    $className = $name;
    $service = $className;
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

namespace DHL\Datatype\<?php echo $_SERVER['argv'][1]; ?>; 
use DHL\Datatype\Base;

/**
 * <?php echo $className; ?> Request model for DHL API
 */
class <?php echo $className; ?> extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
<?php
foreach ($arr['elements'] as $n => $infos) 
{
$subobj = isset($complexDef[$n]) ? 'true' : 'false';
?>
        '<?php echo $n; ?>' => array(
            'type' => '<?php echo $infos['type']; ?>',
            'required' => <?php echo isset($infos['minOccurs']) && $infos['minOccurs'] != 0 ? 'true' : 'false'; ?>,
            'subobject' => <?php echo $subobj; ?>,
<?php
$type = $infos['type'];
if (isset($definition[$type]['comment']))  
            echo "            'comment' => '" . $definition[$type]['comment'] . "'," . PHP_EOL; 

if (isset($infos['restrictionDetails'])) { foreach ($infos['restrictionDetails'] as $k => $v) 
            echo "            '$k' => '$v'," . PHP_EOL; 
}            
elseif (isset($definition[$type]['restrictionDetails'])) { foreach ($definition[$type]['restrictionDetails'] as $k => $v) 
            echo "            '$k' => '$v'," . PHP_EOL; } ?>
        ), 
<?php } ?>
    );
}
<?
    $class = ob_get_contents();
    ob_end_clean();
    $filename = __DIR__ . '/generated/datatype/' . $_SERVER['argv'][1] . '/' . $service . '.php';
    cli('generating class : ' . $filename);

    file_put_contents($filename, $class);
}
