<?php
/**
 * TransportationDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorShipments;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * TransportationDetails Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransportationDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransportationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipMode' => 'string',
'transportationMode' => 'string',
'shippedDate' => '\DateTime',
'estimatedDeliveryDate' => '\DateTime',
'shipmentDeliveryDate' => '\DateTime',
'carrierDetails' => '\SellingPartnerApi\Model\VendorShipments\CarrierDetails',
'billOfLadingNumber' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipMode' => null,
'transportationMode' => null,
'shippedDate' => 'date-time',
'estimatedDeliveryDate' => 'date-time',
'shipmentDeliveryDate' => 'date-time',
'carrierDetails' => null,
'billOfLadingNumber' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipMode' => 'shipMode',
'transportationMode' => 'transportationMode',
'shippedDate' => 'shippedDate',
'estimatedDeliveryDate' => 'estimatedDeliveryDate',
'shipmentDeliveryDate' => 'shipmentDeliveryDate',
'carrierDetails' => 'carrierDetails',
'billOfLadingNumber' => 'billOfLadingNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipMode' => 'setShipMode',
'transportationMode' => 'setTransportationMode',
'shippedDate' => 'setShippedDate',
'estimatedDeliveryDate' => 'setEstimatedDeliveryDate',
'shipmentDeliveryDate' => 'setShipmentDeliveryDate',
'carrierDetails' => 'setCarrierDetails',
'billOfLadingNumber' => 'setBillOfLadingNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipMode' => 'getShipMode',
'transportationMode' => 'getTransportationMode',
'shippedDate' => 'getShippedDate',
'estimatedDeliveryDate' => 'getEstimatedDeliveryDate',
'shipmentDeliveryDate' => 'getShipmentDeliveryDate',
'carrierDetails' => 'getCarrierDetails',
'billOfLadingNumber' => 'getBillOfLadingNumber'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const SHIP_MODE_TRUCK_LOAD = 'TruckLoad';
const SHIP_MODE_LESS_THAN_TRUCK_LOAD = 'LessThanTruckLoad';
const SHIP_MODE_SMALL_PARCEL = 'SmallParcel';
const TRANSPORTATION_MODE_ROAD = 'Road';
const TRANSPORTATION_MODE_AIR = 'Air';
const TRANSPORTATION_MODE_OCEAN = 'Ocean';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipModeAllowableValues()
    {
        return [
            self::SHIP_MODE_TRUCK_LOAD,
self::SHIP_MODE_LESS_THAN_TRUCK_LOAD,
self::SHIP_MODE_SMALL_PARCEL,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportationModeAllowableValues()
    {
        return [
            self::TRANSPORTATION_MODE_ROAD,
self::TRANSPORTATION_MODE_AIR,
self::TRANSPORTATION_MODE_OCEAN,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipMode'] = isset($data['shipMode']) ? $data['shipMode'] : null;
        $this->container['transportationMode'] = isset($data['transportationMode']) ? $data['transportationMode'] : null;
        $this->container['shippedDate'] = isset($data['shippedDate']) ? $data['shippedDate'] : null;
        $this->container['estimatedDeliveryDate'] = isset($data['estimatedDeliveryDate']) ? $data['estimatedDeliveryDate'] : null;
        $this->container['shipmentDeliveryDate'] = isset($data['shipmentDeliveryDate']) ? $data['shipmentDeliveryDate'] : null;
        $this->container['carrierDetails'] = isset($data['carrierDetails']) ? $data['carrierDetails'] : null;
        $this->container['billOfLadingNumber'] = isset($data['billOfLadingNumber']) ? $data['billOfLadingNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getShipModeAllowableValues();
        if (!is_null($this->container['shipMode']) && !in_array($this->container['shipMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shipMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransportationModeAllowableValues();
        if (!is_null($this->container['transportationMode']) && !in_array($this->container['transportationMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transportationMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets shipMode
     *
     * @return string
     */
    public function getShipMode()
    {
        return $this->container['shipMode'];
    }

    /**
     * Sets shipMode
     *
     * @param string $shipMode The type of shipment.
     *
     * @return $this
     */
    public function setShipMode($shipMode)
    {
        $allowedValues = $this->getShipModeAllowableValues();
        if (!is_null($shipMode) && !in_array($shipMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shipMode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipMode'] = $shipMode;

        return $this;
    }

    /**
     * Gets transportationMode
     *
     * @return string
     */
    public function getTransportationMode()
    {
        return $this->container['transportationMode'];
    }

    /**
     * Sets transportationMode
     *
     * @param string $transportationMode The mode of transportation for this shipment.
     *
     * @return $this
     */
    public function setTransportationMode($transportationMode)
    {
        $allowedValues = $this->getTransportationModeAllowableValues();
        if (!is_null($transportationMode) && !in_array($transportationMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transportationMode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transportationMode'] = $transportationMode;

        return $this;
    }

    /**
     * Gets shippedDate
     *
     * @return \DateTime
     */
    public function getShippedDate()
    {
        return $this->container['shippedDate'];
    }

    /**
     * Sets shippedDate
     *
     * @param \DateTime $shippedDate Date when shipment is performed by the Vendor to Buyer
     *
     * @return $this
     */
    public function setShippedDate($shippedDate)
    {
        $this->container['shippedDate'] = $shippedDate;

        return $this;
    }

    /**
     * Gets estimatedDeliveryDate
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimatedDeliveryDate'];
    }

    /**
     * Sets estimatedDeliveryDate
     *
     * @param \DateTime $estimatedDeliveryDate Estimated Date on which shipment will be delivered from Vendor to Buyer
     *
     * @return $this
     */
    public function setEstimatedDeliveryDate($estimatedDeliveryDate)
    {
        $this->container['estimatedDeliveryDate'] = $estimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets shipmentDeliveryDate
     *
     * @return \DateTime
     */
    public function getShipmentDeliveryDate()
    {
        return $this->container['shipmentDeliveryDate'];
    }

    /**
     * Sets shipmentDeliveryDate
     *
     * @param \DateTime $shipmentDeliveryDate Date on which shipment will be delivered from Vendor to Buyer
     *
     * @return $this
     */
    public function setShipmentDeliveryDate($shipmentDeliveryDate)
    {
        $this->container['shipmentDeliveryDate'] = $shipmentDeliveryDate;

        return $this;
    }

    /**
     * Gets carrierDetails
     *
     * @return \SellingPartnerApi\Model\VendorShipments\CarrierDetails
     */
    public function getCarrierDetails()
    {
        return $this->container['carrierDetails'];
    }

    /**
     * Sets carrierDetails
     *
     * @param \SellingPartnerApi\Model\VendorShipments\CarrierDetails $carrierDetails carrierDetails
     *
     * @return $this
     */
    public function setCarrierDetails($carrierDetails)
    {
        $this->container['carrierDetails'] = $carrierDetails;

        return $this;
    }

    /**
     * Gets billOfLadingNumber
     *
     * @return string
     */
    public function getBillOfLadingNumber()
    {
        return $this->container['billOfLadingNumber'];
    }

    /**
     * Sets billOfLadingNumber
     *
     * @param string $billOfLadingNumber Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL present in the Shipment Confirmation message ideally matches the paper BOL provided with the shipment, but that is no must. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field.
     *
     * @return $this
     */
    public function setBillOfLadingNumber($billOfLadingNumber)
    {
        $this->container['billOfLadingNumber'] = $billOfLadingNumber;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange] 
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}