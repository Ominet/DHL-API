<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * ShipmentDate Request model for DHL API
 */
class ShipmentDate extends Base
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
        'ShipmentDateFrom' => array(
            'type' => 'Date',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Date only',
            'pattern' => '[0-9][0-9][0-9][0-9](-)[0-9][0-9](-)[0-9][0-9]',
        ), 
        'ShipmentDateTo' => array(
            'type' => 'Date',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Date only',
            'pattern' => '[0-9][0-9][0-9][0-9](-)[0-9][0-9](-)[0-9][0-9]',
        ), 
    );
}
