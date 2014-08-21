<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * Condition Request model for DHL API
 */
class Condition extends Base
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
        'ConditionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
        'ConditionData' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
