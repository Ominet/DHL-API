<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        ShipmentValidateResponse.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * ShipmentValidateResponse Request model for DHL API
 */
class ShipmentValidateResponse extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'ShipmentValidateResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentValidateResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Response' => array(
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'Note' => array(
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'AirwayBillNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'BillingCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'ChargeCardConfirmationNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'CurrencyCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'CourierMessage' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'DHLRoutingCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'Routing Code Text',
        ), 
        'DHLRoutingDataId' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'DestinationServiceArea' => array(
            'type' => 'DestinationServiceArea',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'OriginServiceArea' => array(
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'ProductContentCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'ProductShortName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'InternalServiceCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'Handling feature code returned by GLS',
        ), 
        'DeliveryDateCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'DeliveryTimeCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'Pieces' => array(
            'type' => 'Pieces',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'PackageCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'Rated' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'ShippingCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'WeightUnit' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'minLength' => '0',
            'maxLength' => '1',
        ), 
        'ChargeableWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'DimensionalWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'ReadyByTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'PickupCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'CallInTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'DaysAdvanceNotice' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'ConversionRate' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'Barcodes' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'Piece' => array(
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'Contents' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'Reference' => array(
            'type' => 'Reference',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'AccountNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ), 
        'CustomerID' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'ShipmentDate' => array(
            'type' => 'ShipmentDate',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'GlobalProductCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'SpecialService' => array(
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ), 
        'Billing' => array(
            'type' => 'Billing',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'Dutiable' => array(
            'type' => 'Dutiable',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'ExportDeclaration' => array(
            'type' => 'ExportDeclaration',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'NewShipper' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'PLTStatus' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'PLTStatus',
            'length' => '1',
            'enumeration' => 'A,D,S',
        ), 
        'QtdSInAdCur' => array(
            'type' => 'QtdSInAdCur',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'LabelImage' => array(
            'type' => 'LabelImage',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'CustData' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'CustData',
            'minLength' => '1',
            'maxLength' => '100',
        ), 
    );
}
