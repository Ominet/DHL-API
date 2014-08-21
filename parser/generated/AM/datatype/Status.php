<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * Status Request model for DHL API
 */
class Status extends Base
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
        'ActionStatus' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Condition' => array(
            'type' => 'Condition',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
