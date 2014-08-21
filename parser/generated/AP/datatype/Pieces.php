<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * Pieces Request model for DHL API
 */
class Pieces extends Base
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
            'type' => 'Piece',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
