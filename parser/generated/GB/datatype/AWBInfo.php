<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * AWBInfo Request model for DHL API
 */
class AWBInfo extends Base
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
        'AWBNumber' => array(
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Airway bill number',
            'maxLength' => '10',
        ), 
        'Status' => array(
            'type' => 'Status',
            'required' => false,
            'subobject' => 'false',
        ), 
        'ShipmentInfo' => array(
            'type' => 'ShipmentInfo',
            'required' => false,
            'subobject' => 'false',
        ), 
        'PieceInfo' => array(
            'type' => 'PieceInfo',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
