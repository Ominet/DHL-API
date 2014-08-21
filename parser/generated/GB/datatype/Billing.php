<?php
namespace DHL\Entity\GB; 
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
            'maxLength' => '12',
        ), 
        'ShippingPaymentType' => array(
            'type' => 'ShipmentPaymentType',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Shipment payment type (S:Shipper)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ), 
        'BillingAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ), 
        'DutyPaymentType' => array(
            'type' => 'DutyTaxPaymentType',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Duty and tax charge payment type (R:Recipient)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ), 
        'DutyAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ), 
    );
}
