<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * ShipValResponsePieces Request model for DHL API
 */
class ShipValResponsePieces extends Base
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
        'Piece' => array(
            'type' => 'ShipValResponsePiece',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
