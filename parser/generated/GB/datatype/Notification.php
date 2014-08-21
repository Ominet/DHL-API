<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * Notification Request model for DHL API
 */
class Notification extends Base
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
        'EmailAddress' => array(
            'type' => 'Message',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Message',
            'maxLength' => '250',
        ), 
        'Message' => array(
            'type' => 'Message',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Message',
            'maxLength' => '250',
        ), 
    );
}
