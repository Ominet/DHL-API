<?php
namespace DHL\Entity\EA; 
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
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => 'false',
        ), 
        'DestinationServiceArea' => array(
            'type' => 'DestinationServiceArea',
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
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
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
        'EstDlvyDateUTC' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => 'false',
        ), 
        'GlobalProductCode' => array(
            'type' => 'GlobalProductCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'ShipmentDesc' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
        'DlvyNotificationFlag' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
