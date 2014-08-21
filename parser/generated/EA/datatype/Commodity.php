<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * Commodity Request model for DHL API
 */
class Commodity extends Base
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
        'CommodityCode' => array(
            'type' => 'CommodityCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Commodity codes for shipment type',
            'minLength' => '1',
            'maxLength' => '20',
        ), 
        'CommodityName' => array(
            'type' => 'CommodityName',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Commodity name for shipment content',
            'maxLength' => '35',
        ), 
    );
}
