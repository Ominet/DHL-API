<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * Customer Request model for DHL API
 */
class Customer extends Base
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
        'CustomerID' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Name' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
