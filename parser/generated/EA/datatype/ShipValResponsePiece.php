<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * ShipValResponsePiece Request model for DHL API
 */
class ShipValResponsePiece extends Base
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
        'PieceNumber' => array(
            'type' => 'PieceNumber',
            'required' => true,
            'subobject' => 'false',
            'comment' => 'Piece Number',
        ), 
        'Depth' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Width' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Height' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => 'false',
        ), 
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ), 
        'PackageType' => array(
            'type' => 'PackageType',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other DHL Packaging, CP:Customer-provided.Ground shipments must choose CP)',
            'length' => '2',
            'enumeration' => 'EE,OD,CP',
        ), 
        'DimWeight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ), 
        'PieceContents' => array(
            'type' => 'PieceContents',
            'required' => false,
            'subobject' => 'false',
            'comment' => 'Piece contents description',
            'maxLength' => '90',
        ), 
        'DataIdentifier' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => 'false',
        ), 
        'LicensePlate' => array(
            'type' => 'PieceID',
            'required' => true,
            'subobject' => 'false',
            'comment' => 'Piece ID',
            'maxLength' => '35',
        ), 
        'LicensePlateBarCode' => array(
            'type' => 'BarCode',
            'required' => true,
            'subobject' => 'false',
            'comment' => '',
        ), 
    );
}
