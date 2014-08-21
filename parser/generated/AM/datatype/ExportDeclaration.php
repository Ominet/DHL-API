<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * ExportDeclaration Request model for DHL API
 */
class ExportDeclaration extends Base
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
        'InterConsignee' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'IsPartiesRelation' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'ECCN' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'SignatureName' => array(
            'type' => 'SignatureName',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Signature name',
            'maxLength' => '35',
        ), 
        'SignatureTitle' => array(
            'type' => 'SignatureTitle',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Signature title',
            'maxLength' => '35',
        ), 
        'ExportReason' => array(
            'type' => 'ExportReason',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Export reason',
            'length' => '1',
        ), 
        'ExportReasonCode' => array(
            'type' => 'ExportReasonCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Export reason code (P:Permanent, T:Temporary, R:Re-Export)',
            'length' => '1',
            'enumeration' => 'P,T,R',
        ), 
        'SedNumber' => array(
            'type' => 'SEDNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => '',
            'enumeration' => 'FTSR,XTN,SAS',
        ), 
        'SedNumberType' => array(
            'type' => 'SEDNumberType',
            'required' => false,
            'subobject' => 'false',
            'comment' => '',
            'length' => '1',
            'enumeration' => 'F,X,S',
        ), 
        'MxStateCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'ExportLineItem' => array(
            'type' => 'ExportLineItem',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
