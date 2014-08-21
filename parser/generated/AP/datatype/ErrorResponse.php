<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * ErrorResponse Request model for DHL API
 */
class ErrorResponse extends Base
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
        'ServiceHeader' => array(
            'type' => 'ServiceHeader',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Status' => array(
            'type' => 'Status',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
