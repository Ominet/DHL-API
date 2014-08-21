<?php
namespace DHL\Entity\AP; 
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
            'maxLength' => '11',
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
        'Pieces' => array(
            'type' => 'TrackingPieces',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
