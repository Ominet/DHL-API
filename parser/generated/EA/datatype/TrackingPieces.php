<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * TrackingPieces Request model for DHL API
 */
class TrackingPieces extends Base
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
        'PieceInfo' => array(
            'type' => 'PieceInfo',
            'required' => true,
            'subobject' => 'false',
        ), 
    );
}
