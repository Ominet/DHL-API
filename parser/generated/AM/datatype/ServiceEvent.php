<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * ServiceEvent Request model for DHL API
 */
class ServiceEvent extends Base
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
        'EventCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Description' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
