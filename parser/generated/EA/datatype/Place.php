<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * Place Request model for DHL API
 */
class Place extends Base
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
        'ResidenceOrBusiness' => array(
            'type' => 'ResidenceOrBusiness',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Identifies if a location is a business, residence, or both (B:Business, R:Residence, C:Business Residence)',
            'length' => '1',
            'enumeration' => 'B,R,C',
        ), 
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Name of company / business',
            'maxLength' => '35',
        ), 
        'AddressLine' => array(
            'type' => 'AddressLine',
            'required' => false,
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
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'DivisionCode' => array(
            'type' => 'StateCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Division (state) code.',
            'maxLength' => '2',
            'minLength' => '2',
        ), 
        'Division' => array(
            'type' => 'State',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'State',
            'maxLength' => '35',
        ), 
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Full postal/zip code for address',
        ), 
    );
}
