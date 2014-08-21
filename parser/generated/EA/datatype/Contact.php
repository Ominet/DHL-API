<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * Contact Request model for DHL API
 */
class Contact extends Base
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
        'PersonName' => array(
            'type' => 'PersonName',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Name',
            'maxLength' => '35',
        ), 
        'PhoneNumber' => array(
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Phone Number',
        ), 
        'PhoneExtension' => array(
            'type' => 'PhoneExtension',
            'required' => false,
            'subobject' => 'false',
            'comment' => '',
            'maxLength' => '5',
        ), 
        'FaxNumber' => array(
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Phone Number',
        ), 
        'Telex' => array(
            'type' => 'Telex',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Telex number and answer back code',
            'maxLength' => '25',
        ), 
        'Email' => array(
            'type' => 'Email',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
