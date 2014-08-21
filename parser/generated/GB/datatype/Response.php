<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * Response Request model for DHL API
 */
class Response extends Base
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
            'type' => 'ResponseServiceHeader',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
