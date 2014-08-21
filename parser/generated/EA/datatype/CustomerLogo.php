<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * CustomerLogo Request model for DHL API
 */
class CustomerLogo extends Base
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
        'LogoImage' => array(
            'type' => 'LogoImage',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'LogoImage',
            'maxLength' => '1048576',
        ), 
        'LogoImageFormat' => array(
            'type' => 'LogoImageFormat',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'LogoImage Format',
            'enumeration' => 'PNG,GIF,JPEG,JPG',
        ), 
    );
}
