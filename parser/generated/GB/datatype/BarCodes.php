<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * BarCodes Request model for DHL API
 */
class BarCodes extends Base
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
        'BarCode' => array(
            'type' => 'BarCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => '',
        ), 
    );
}
