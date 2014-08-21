<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * EventRemarks Request model for DHL API
 */
class EventRemarks extends Base
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
        'FurtherDetails' => array(
            'type' => 'FurtherDetails',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'FurtherDetails',
        ), 
        'NextSteps' => array(
            'type' => 'NextSteps',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'NextSteps',
        ), 
    );
}
