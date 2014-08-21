<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * ShipmentInfo Request model for DHL API
 */
class ShipmentInfo extends Base
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
        'OriginServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => 'false',
        ), 
        'DestinationServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => 'false',
        ), 
        'ShipperName' => array(
            'type' => 'PersonName',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Name',
            'maxLength' => '35',
        ), 
        'ShipperAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ), 
        'ConsigneeName' => array(
            'type' => 'PersonName',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Name',
            'maxLength' => '35',
        ), 
        'ShipmentDate' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Pieces' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Weight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
        'WeightUnit' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'EstDlvyDate' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
