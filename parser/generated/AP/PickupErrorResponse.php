<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        PickupErrorResponse.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * PickupErrorResponse Request model for DHL API
 */
class PickupErrorResponse extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'PickupErrorResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'PickupErrorResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Response' => array(
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
    );
}
