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
 * File:        ShipmentRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * ShipmentRequest Request model for DHL API
 */
class ShipmentRequest extends Base
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
    protected $_serviceName = 'ShipmentRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ), 
        'RequestedPickupTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'NewShipper' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'LanguageCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'ISO Language Code',
            'maxLength' => '2',
        ), 
        'PiecesEnabled' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'Pieces Enabling Flag',
            'enumeration' => 'Y,N',
        ), 
        'Billing' => array(
            'type' => 'Billing',
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
        'Commodity' => array(
            'type' => 'Commodity',
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
        'Reference' => array(
            'type' => 'Reference',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'ShipmentDetails' => array(
            'type' => 'ShipmentDetails',
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
        'SpecialService' => array(
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ), 
        'Notification' => array(
            'type' => 'Notification',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'Place' => array(
            'type' => 'Place',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'EProcShip' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'Airwaybill' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'DocImages' => array(
            'type' => 'DocImages',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'LabelImageFormat' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
            'comment' => 'LabelImageFormat',
            'minLength' => '3',
            'maxLength' => '4',
            'enumeration' => 'PDF,ZPL2,EPL2',
        ), 
        'RequestArchiveDoc' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'Label' => array(
            'type' => 'Label',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
    );
}
