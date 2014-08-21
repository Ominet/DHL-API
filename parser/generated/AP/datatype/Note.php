<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * Note Request model for DHL API
 */
class Note extends Base
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
        'ActionNote' => array(
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
