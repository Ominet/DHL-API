<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * Consignee Request model for DHL API
 */
class Consignee extends Base
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
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Name of company / business',
            'minLength' => '0',
            'maxLength' => '35',
        ), 
        'SuiteDepartmentName' => array(
            'type' => 'SuiteDepartmentName',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'SuiteDepartmentName',
            'maxLength' => '35',
        ), 
        'AddressLine' => array(
            'type' => 'AddressLine',
            'required' => true,
            'subobject' => 'false',
            'comment' => 'Address Line',
            'maxLength' => '35',
        ), 
        'City' => array(
            'type' => 'City',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'City name',
            'maxLength' => '35',
        ), 
        'Division' => array(
            'type' => 'Division',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
            'maxLength' => '35',
        ), 
        'DivisionCode' => array(
            'type' => 'DivisionCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Division (e.g. state, prefecture, etc.) code',
            'maxLength' => '35',
        ), 
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
        ), 
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'CountryName' => array(
            'type' => 'CountryName',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'ISO country name',
            'maxLength' => '35',
        ), 
        'FederalTaxId' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'StateTaxId' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Contact' => array(
            'type' => 'Contact',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
