<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * PieceFault Request model for DHL API
 */
class PieceFault extends Base
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
        'PieceID' => array(
            'type' => 'TrackingPieceID',
            'required' => true,
            'subobject' => 'false',
            'comment' => 'Piece ID',
            'minLength' => '1',
            'maxLength' => '35',
        ), 
        'ConditionCode' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => 'false',
        ), 
        'ConditionData' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => 'false',
        ), 
    );
}
