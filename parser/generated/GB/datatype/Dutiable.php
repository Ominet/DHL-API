<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * Dutiable Request model for DHL API
 */
class Dutiable extends Base
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
        'DeclaredValue' => array(
            'type' => 'DeclaredValue',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DeclaredValue',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'DeclaredCurrency' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'ScheduleB' => array(
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ), 
        'ExportLicense' => array(
            'type' => 'ExportLicense',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'ExportLicense',
            'maxLength' => '16',
        ), 
        'ShipperEIN' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'ShipperIDType' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'ConsigneeIDType' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'ImportLicense' => array(
            'type' => 'ImportLicense',
            'required' => false,
            'subobject' => 'false',
            'comment' => '\"ImportLicense\"',
            'maxLength' => '16',
        ), 
        'ConsigneeEIN' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'TermsOfTrade' => array(
            'type' => 'TermsOfTrade',
            'required' => false,
            'subobject' => 'false',
            'comment' => '\"TermsOfTrade\"',
            'maxLength' => '3',
        ), 
        'CommerceLicensed' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'Filing' => array(
            'type' => 'Filing',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
