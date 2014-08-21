<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * OriginServiceArea Request model for DHL API
 */
class OriginServiceArea extends Base
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
        'ServiceAreaCode' => array(
            'type' => 'ServiceAreaCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'DHL service area code',
            'length' => '3',
        ), 
        'Description' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => 'false',
        ), 
        'OutboundSortCode' => array(
            'type' => 'OutboundSortCode',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'OutBound Sort Code',
            'length' => '4',
        ), 
    );
}
