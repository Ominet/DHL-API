<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * DocImages Request model for DHL API
 */
class DocImages extends Base
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
        'DocImage' => array(
            'type' => 'DocImage',
            'required' => false,
            'subobject' => 'false',
        ), 
    );
}
