<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * Billing Request model for DHL API
 */
class Billing extends Base
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
        'ShipperAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ), 
        'ShippingPaymentType' => array(
            'type' => 'PaymentType',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'payment type (S:Shipper,R:Recipient,T:Third Party,C:Credit Card)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ), 
        'BillingAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ), 
        'DutyPaymentType' => array(
            'type' => 'DutyTaxPaymentType',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Duty and tax charge payment type (S:Shipper, R:Recipient, T:Third Party/Other)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ), 
        'DutyAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ), 
    );
}
