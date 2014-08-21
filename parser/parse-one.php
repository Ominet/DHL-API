<?php
function cli($msg) { echo '[' . date('Y-m-d H:i:s') . '] - ' . $msg . PHP_EOL; }

$folder = __DIR__ . '/xsd/';

foreach (new DirectoryIterator($folder) as $fileInfo) 
{
    if($fileInfo->isDot()) 
            continue;

    cli($fileInfo->getFilename());

    if  ($result = process($folder . $fileInfo->getFilename()))
    {
        generateClass($result['arr'], $result['service'], $result['className']);
    }
}

function process($file) 
{
    $string = file_get_contents($file);
    $string = str_replace('xsd:', '', $string);
    $xml = simplexml_load_string($string);

    if (!$xml) 
            return false;

    $service = (string) $xml->element['name'];
    $className = str_replace('Request', '', $service);

    $arr[$service] = array();
    
    if (!isset($xml->element->complexType->sequence->element)) 
    {
        return;
    }

    foreach ($xml->element->complexType->sequence->element as $element) 
    {
        $values['key'] = (string) $element['name'];
        $values['required'] = (string) $element['minOccurs'] === "0" ? false : true;
        $values['subobject'] = isset($element->complexType);
        $arr[] = $values;
    }

    return array('arr' => $arr, 'service' => $service, 'className' => $className);
}

function generateClass($arr, $className, $service)
{
    ob_start();    
    echo '<?php' . PHP_EOL;
?>
namespace DHL\Request;

/**
 * <?php echo $className; ?> Request model for DHL API
 */
class <?php echo $className; ?> extends Base
{
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
foreach ($arr as $infos) 
{ ?>
        '<?php echo $infos['key']; ?>' => array(
            'type' => 'string',
            'required' => <?php echo $infos['required'] ? 'true' : 'false'; ?>,
            'subobject' => <?php echo $infos['suboject'] ? 'true' : 'false'; ?>,
        ),
<?php } ?>
    );
}
<?
    $class = ob_get_contents();
    ob_end_clean();
    $filename = __DIR__ . '/generated/' . $service . '.php';
    cli('generating class : ' . $filename);
    file_put_contents($filename, $class);
}
