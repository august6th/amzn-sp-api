<?php
/**
 * Container
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * Container Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Container implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Container';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'containerType' => 'string',
'containerIdentifier' => 'string',
'trackingNumber' => 'string',
'manifestId' => 'string',
'manifestDate' => 'string',
'shipMethod' => 'string',
'scacCode' => 'string',
'carrier' => 'string',
'containerSequenceNumber' => 'int',
'dimensions' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Dimensions',
'weight' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Weight',
'packedItems' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\PackedItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'containerType' => null,
'containerIdentifier' => null,
'trackingNumber' => null,
'manifestId' => null,
'manifestDate' => null,
'shipMethod' => null,
'scacCode' => null,
'carrier' => null,
'containerSequenceNumber' => null,
'dimensions' => null,
'weight' => null,
'packedItems' => null    ];

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
        'containerType' => 'containerType',
'containerIdentifier' => 'containerIdentifier',
'trackingNumber' => 'trackingNumber',
'manifestId' => 'manifestId',
'manifestDate' => 'manifestDate',
'shipMethod' => 'shipMethod',
'scacCode' => 'scacCode',
'carrier' => 'carrier',
'containerSequenceNumber' => 'containerSequenceNumber',
'dimensions' => 'dimensions',
'weight' => 'weight',
'packedItems' => 'packedItems'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'containerType' => 'setContainerType',
'containerIdentifier' => 'setContainerIdentifier',
'trackingNumber' => 'setTrackingNumber',
'manifestId' => 'setManifestId',
'manifestDate' => 'setManifestDate',
'shipMethod' => 'setShipMethod',
'scacCode' => 'setScacCode',
'carrier' => 'setCarrier',
'containerSequenceNumber' => 'setContainerSequenceNumber',
'dimensions' => 'setDimensions',
'weight' => 'setWeight',
'packedItems' => 'setPackedItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'containerType' => 'getContainerType',
'containerIdentifier' => 'getContainerIdentifier',
'trackingNumber' => 'getTrackingNumber',
'manifestId' => 'getManifestId',
'manifestDate' => 'getManifestDate',
'shipMethod' => 'getShipMethod',
'scacCode' => 'getScacCode',
'carrier' => 'getCarrier',
'containerSequenceNumber' => 'getContainerSequenceNumber',
'dimensions' => 'getDimensions',
'weight' => 'getWeight',
'packedItems' => 'getPackedItems'    ];

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

    const CONTAINER_TYPE_CARTON = 'carton';
const CONTAINER_TYPE_PALLET = 'pallet';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContainerTypeAllowableValues()
    {
        return [
            self::CONTAINER_TYPE_CARTON,
self::CONTAINER_TYPE_PALLET,        ];
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
        $this->container['containerType'] = isset($data['containerType']) ? $data['containerType'] : null;
        $this->container['containerIdentifier'] = isset($data['containerIdentifier']) ? $data['containerIdentifier'] : null;
        $this->container['trackingNumber'] = isset($data['trackingNumber']) ? $data['trackingNumber'] : null;
        $this->container['manifestId'] = isset($data['manifestId']) ? $data['manifestId'] : null;
        $this->container['manifestDate'] = isset($data['manifestDate']) ? $data['manifestDate'] : null;
        $this->container['shipMethod'] = isset($data['shipMethod']) ? $data['shipMethod'] : null;
        $this->container['scacCode'] = isset($data['scacCode']) ? $data['scacCode'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['containerSequenceNumber'] = isset($data['containerSequenceNumber']) ? $data['containerSequenceNumber'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['packedItems'] = isset($data['packedItems']) ? $data['packedItems'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['containerType'] === null) {
            $invalidProperties[] = "'containerType' can't be null";
        }
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!is_null($this->container['containerType']) && !in_array($this->container['containerType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'containerType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['containerIdentifier'] === null) {
            $invalidProperties[] = "'containerIdentifier' can't be null";
        }
        if ($this->container['packedItems'] === null) {
            $invalidProperties[] = "'packedItems' can't be null";
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
     * Gets containerType
     *
     * @return string
     */
    public function getContainerType()
    {
        return $this->container['containerType'];
    }

    /**
     * Sets containerType
     *
     * @param string $containerType The type of container.
     *
     * @return $this
     */
    public function setContainerType($containerType)
    {
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!in_array($containerType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'containerType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['containerType'] = $containerType;

        return $this;
    }

    /**
     * Gets containerIdentifier
     *
     * @return string
     */
    public function getContainerIdentifier()
    {
        return $this->container['containerIdentifier'];
    }

    /**
     * Sets containerIdentifier
     *
     * @param string $containerIdentifier The container identifier.
     *
     * @return $this
     */
    public function setContainerIdentifier($containerIdentifier)
    {
        $this->container['containerIdentifier'] = $containerIdentifier;

        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string $trackingNumber The tracking number.
     *
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->container['trackingNumber'] = $trackingNumber;

        return $this;
    }

    /**
     * Gets manifestId
     *
     * @return string
     */
    public function getManifestId()
    {
        return $this->container['manifestId'];
    }

    /**
     * Sets manifestId
     *
     * @param string $manifestId The manifest identifier.
     *
     * @return $this
     */
    public function setManifestId($manifestId)
    {
        $this->container['manifestId'] = $manifestId;

        return $this;
    }

    /**
     * Gets manifestDate
     *
     * @return string
     */
    public function getManifestDate()
    {
        return $this->container['manifestDate'];
    }

    /**
     * Sets manifestDate
     *
     * @param string $manifestDate The date of the manifest.
     *
     * @return $this
     */
    public function setManifestDate($manifestDate)
    {
        $this->container['manifestDate'] = $manifestDate;

        return $this;
    }

    /**
     * Gets shipMethod
     *
     * @return string
     */
    public function getShipMethod()
    {
        return $this->container['shipMethod'];
    }

    /**
     * Sets shipMethod
     *
     * @param string $shipMethod The shipment method.
     *
     * @return $this
     */
    public function setShipMethod($shipMethod)
    {
        $this->container['shipMethod'] = $shipMethod;

        return $this;
    }

    /**
     * Gets scacCode
     *
     * @return string
     */
    public function getScacCode()
    {
        return $this->container['scacCode'];
    }

    /**
     * Sets scacCode
     *
     * @param string $scacCode SCAC code required for NA VOC vendors only.
     *
     * @return $this
     */
    public function setScacCode($scacCode)
    {
        $this->container['scacCode'] = $scacCode;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier Carrier required for EU VOC vendors only.
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets containerSequenceNumber
     *
     * @return int
     */
    public function getContainerSequenceNumber()
    {
        return $this->container['containerSequenceNumber'];
    }

    /**
     * Sets containerSequenceNumber
     *
     * @param int $containerSequenceNumber An integer that must be submitted for multi-box shipments only, where one item may come in separate packages.
     *
     * @return $this
     */
    public function setContainerSequenceNumber($containerSequenceNumber)
    {
        $this->container['containerSequenceNumber'] = $containerSequenceNumber;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Dimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Weight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets packedItems
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\PackedItem[]
     */
    public function getPackedItems()
    {
        return $this->container['packedItems'];
    }

    /**
     * Sets packedItems
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\PackedItem[] $packedItems A list of packed items.
     *
     * @return $this
     */
    public function setPackedItems($packedItems)
    {
        $this->container['packedItems'] = $packedItems;

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
