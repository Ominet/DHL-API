<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * PieceEvent Request model for DHL API
 */
class PieceEvent extends Base
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
        'Date' => array(
            'type' => 'date',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Time' => array(
            'type' => 'time',
            'required' => false,
            'subobject' => 'false',
        ), 
        'ServiceEvent' => array(
            'type' => 'ServiceEvent',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Signatory' => array(
            'type' => '',
            'required' => false,
            'subobject' => 'false',
        ), 
        'ServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
