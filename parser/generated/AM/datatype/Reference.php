<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * Reference Request model for DHL API
 */
class Reference extends Base
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
        'ReferenceID' => array(
            'type' => 'ReferenceID',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Shipper reference ID',
            'maxLength' => '35',
        ), 
        'ReferenceType' => array(
            'type' => 'ReferenceType',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Shipment reference type',
            'length' => '2',
        ), 
    );
}
