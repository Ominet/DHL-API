<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * Fault Request model for DHL API
 */
class Fault extends Base
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
        'PieceFault' => array(
            'type' => 'PieceFault',
            'required' => true,
            'subobject' => 'false',
        ), 
    );
}
