<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * QtdSInAdCur Request model for DHL API
 */
class QtdSInAdCur extends Base
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
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => true,
            'subobject' => 'false',
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'CurrencyRoleTypeCode' => array(
            'type' => 'CurrencyRoleTypeCode',
            'required' => true,
            'subobject' => 'false',
            'comment' => 'CurrencyRoleTypeCode',
            'maxLength' => '6',
            'enumeration' => 'BILLCU,PULCL,INVCU,BASEC',
        ), 
        'PackageCharge' => array(
            'type' => 'PackageCharge',
            'required' => true,
            'subobject' => 'false',
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'ShippingCharge' => array(
            'type' => 'ShippingCharge',
            'required' => true,
            'subobject' => 'false',
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
    );
}
