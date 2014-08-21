<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * Label Request model for DHL API
 */
class Label extends Base
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
        'LabelTemplate' => array(
            'type' => 'LabelTemplate',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'LabelTemplate',
            'enumeration' => '8X4_A4_PDF,8X4_thermal,8X4_A4_TC_PDF,6X4_A4_PDF,6X4_thermal,8X4_CI_PDF,8X4_CI_thermal',
        ), 
        'Logo' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CustomerLogo' => array(
            'type' => 'CustomerLogo',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Resolution' => array(
            'type' => 'Resolution',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Resolution',
            'minInclusive' => '200',
            'maxInclusive' => '300',
        ), 
    );
}
