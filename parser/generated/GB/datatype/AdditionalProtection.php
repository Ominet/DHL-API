<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * AdditionalProtection Request model for DHL API
 */
class AdditionalProtection extends Base
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
        'Code' => array(
            'type' => 'Code',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Code',
            'length' => '2',
            'enumeration' => 'AP,NR',
        ), 
        'Value' => array(
            'type' => 'Value',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Value',
            'maxInclusive' => '9999999.99',
        ), 
    );
}
