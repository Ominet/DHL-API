<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * ServiceHeader Request model for DHL API
 */
class ServiceHeader extends Base
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
        'MessageTime' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => 'false',
        ), 
        'MessageReference' => array(
            'type' => 'MessageReference',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Reference to the requested Message',
            'minLength' => '28',
            'maxLength' => '32',
        ), 
        'SiteID' => array(
            'type' => 'SiteID',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Site ID used for verifying the sender',
            'minLength' => '6',
            'maxLength' => '20',
        ), 
        'Password' => array(
            'type' => 'Password',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Password used for verifying the sender',
            'minLength' => '8',
            'maxLength' => '20',
        ), 
    );
}
