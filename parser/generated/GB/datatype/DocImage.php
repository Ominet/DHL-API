<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * DocImage Request model for DHL API
 */
class DocImage extends Base
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
        'Type' => array(
            'type' => 'Type',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Image Type',
            'length' => '3',
            'enumeration' => 'HWB,INV,PNV,COO,NAF,CIN,DCL',
        ), 
        'Image' => array(
            'type' => 'Image',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Image',
        ), 
        'ImageFormat' => array(
            'type' => 'ImageFormat',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Image Format',
            'maxLength' => '5',
            'enumeration' => 'PDF,PNG,TIFF,GIF,JPEG',
        ), 
    );
}
