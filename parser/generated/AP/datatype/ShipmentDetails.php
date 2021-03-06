<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * ShipmentDetails Request model for DHL API
 */
class ShipmentDetails extends Base
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
        'NumberOfPieces' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Pieces' => array(
            'type' => 'Pieces',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ), 
        'WeightUnit' => array(
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ), 
        'ProductCode' => array(
            'type' => 'ProductCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DHL product code 
			D : US Overnight  (>0.5 lb) and Worldwide Express Non-dutiable  (>0.5 lb) 
			X : USA Express Envelope   (less than or  = 0.5 lb) and Worldwide Express-International Express Envelope  (less than or = 0.5 lb) 
			W : Worldwide Express-Dutiable
			Y : DHL Second Day Express . Must be Express Envelop with weight lessthan or = 0.5 lb
			G : DHL Second Day . Weight > 0.5 lb or not an express envelop
			T : DHL Ground Shipments',
            'pattern' => '([A-Z0-9])*',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'GlobalProductCode' => array(
            'type' => 'ProductCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DHL product code 
			D : US Overnight  (>0.5 lb) and Worldwide Express Non-dutiable  (>0.5 lb) 
			X : USA Express Envelope   (less than or  = 0.5 lb) and Worldwide Express-International Express Envelope  (less than or = 0.5 lb) 
			W : Worldwide Express-Dutiable
			Y : DHL Second Day Express . Must be Express Envelop with weight lessthan or = 0.5 lb
			G : DHL Second Day . Weight > 0.5 lb or not an express envelop
			T : DHL Ground Shipments',
            'pattern' => '([A-Z0-9])*',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'LocalProductCode' => array(
            'type' => 'LocalProductCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'Date' => array(
            'type' => 'Date',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Date only',
        ), 
        'Contents' => array(
            'type' => 'ShipmentContents',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Shipment contents description',
            'maxLength' => '90',
        ), 
        'DoorTo' => array(
            'type' => 'DoorTo',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Defines the type of delivery service that applies to the shipment',
            'length' => '2',
            'enumeration' => 'DD,DA,AA,DC',
        ), 
        'DimensionUnit' => array(
            'type' => 'DimensionUnit',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Dimension Unit I (inches)',
            'length' => '1',
            'enumeration' => 'C,I',
        ), 
        'InsuredAmount' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'PackageType' => array(
            'type' => 'PackageType',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other DHL Packaging, CP:Customer-provided.Ground shipments must choose CP)',
            'length' => '2',
            'enumeration' => 'EE,OD,CP',
        ), 
        'IsDutiable' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'CustData' => array(
            'type' => 'CustData',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'CustData',
            'minLength' => '1',
            'maxLength' => '100',
        ), 
    );
}
