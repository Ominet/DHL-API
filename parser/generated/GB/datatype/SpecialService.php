<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * SpecialService Request model for DHL API
 */
class SpecialService extends Base
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
        'SpecialServiceType' => array(
            'type' => 'SpecialServiceType',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Special Service codes',
            'maxLength' => '3',
        ), 
        'CommunicationAddress' => array(
            'type' => 'CommunicationAddress',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Communications line number: phone number, fax
				number',
            'maxLength' => '50',
        ), 
        'CommunicationType' => array(
            'type' => 'CommunicationType',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Communications line type (P: phone, F: fax)',
            'length' => '1',
            'enumeration' => 'P,F',
        ), 
        'SpecialServiceDesc' => array(
            'type' => 'SpecialServiceDesc',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Special Service Description',
            'maxLength' => '45',
        ), 
        'ChargeValue' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'IsWaived' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
    );
}
