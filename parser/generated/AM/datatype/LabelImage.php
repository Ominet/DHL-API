<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * LabelImage Request model for DHL API
 */
class LabelImage extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = null;

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = null;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'OutputFormat' => array(
            'type' => 'OutputFormat',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'OutputFormat',
            'enumeration' => 'PDF,PL2,ZPL2,JPG,PNG,EPL2,EPLN,ZPLN',
        ), 
        'OutputImage' => array(
            'type' => 'OutputImage',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'OutputImage',
        ), 
        'OutputImageNPC' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
