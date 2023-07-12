<?php
/**
 * Containers
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
 * Swagger Codegen version: 2.4.29
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * Containers Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Containers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'containers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'container_type' => 'string',
        'container_sequence_number' => 'string',
        'container_identifiers' => '\SellingPartnerApi\Model\ContainerIdentification[]',
        'tracking_number' => 'string',
        'dimensions' => '\SellingPartnerApi\Model\Dimensions',
        'weight' => '\SellingPartnerApi\Model\Weight',
        'tier' => 'int',
        'block' => 'int',
        'inner_containers_details' => '\SellingPartnerApi\Model\InnerContainersDetails',
        'packed_items' => '\SellingPartnerApi\Model\PackedItems[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'container_type' => null,
        'container_sequence_number' => null,
        'container_identifiers' => null,
        'tracking_number' => null,
        'dimensions' => null,
        'weight' => null,
        'tier' => null,
        'block' => null,
        'inner_containers_details' => null,
        'packed_items' => null
    ];

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
        'container_type' => 'containerType',
        'container_sequence_number' => 'containerSequenceNumber',
        'container_identifiers' => 'containerIdentifiers',
        'tracking_number' => 'trackingNumber',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'tier' => 'tier',
        'block' => 'block',
        'inner_containers_details' => 'innerContainersDetails',
        'packed_items' => 'packedItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'container_type' => 'setContainerType',
        'container_sequence_number' => 'setContainerSequenceNumber',
        'container_identifiers' => 'setContainerIdentifiers',
        'tracking_number' => 'setTrackingNumber',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'tier' => 'setTier',
        'block' => 'setBlock',
        'inner_containers_details' => 'setInnerContainersDetails',
        'packed_items' => 'setPackedItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_type' => 'getContainerType',
        'container_sequence_number' => 'getContainerSequenceNumber',
        'container_identifiers' => 'getContainerIdentifiers',
        'tracking_number' => 'getTrackingNumber',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'tier' => 'getTier',
        'block' => 'getBlock',
        'inner_containers_details' => 'getInnerContainersDetails',
        'packed_items' => 'getPackedItems'
    ];

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
            self::CONTAINER_TYPE_PALLET,
        ];
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
        $this->container['container_type'] = isset($data['container_type']) ? $data['container_type'] : null;
        $this->container['container_sequence_number'] = isset($data['container_sequence_number']) ? $data['container_sequence_number'] : null;
        $this->container['container_identifiers'] = isset($data['container_identifiers']) ? $data['container_identifiers'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['block'] = isset($data['block']) ? $data['block'] : null;
        $this->container['inner_containers_details'] = isset($data['inner_containers_details']) ? $data['inner_containers_details'] : null;
        $this->container['packed_items'] = isset($data['packed_items']) ? $data['packed_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['container_type'] === null) {
            $invalidProperties[] = "'container_type' can't be null";
        }
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!is_null($this->container['container_type']) && !in_array($this->container['container_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'container_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_identifiers'] === null) {
            $invalidProperties[] = "'container_identifiers' can't be null";
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
     * Gets container_type
     *
     * @return string
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param string $container_type The type of container.
     *
     * @return $this
     */
    public function setContainerType($container_type)
    {
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!in_array($container_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'container_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets container_sequence_number
     *
     * @return string
     */
    public function getContainerSequenceNumber()
    {
        return $this->container['container_sequence_number'];
    }

    /**
     * Sets container_sequence_number
     *
     * @param string $container_sequence_number An integer that must be submitted for multi-box shipments only, where one item may come in separate packages.
     *
     * @return $this
     */
    public function setContainerSequenceNumber($container_sequence_number)
    {
        $this->container['container_sequence_number'] = $container_sequence_number;

        return $this;
    }

    /**
     * Gets container_identifiers
     *
     * @return \SellingPartnerApi\Model\ContainerIdentification[]
     */
    public function getContainerIdentifiers()
    {
        return $this->container['container_identifiers'];
    }

    /**
     * Sets container_identifiers
     *
     * @param \SellingPartnerApi\Model\ContainerIdentification[] $container_identifiers A list of carton identifiers.
     *
     * @return $this
     */
    public function setContainerIdentifiers($container_identifiers)
    {
        $this->container['container_identifiers'] = $container_identifiers;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number The tracking number used for identifying the shipment.
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \SellingPartnerApi\Model\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \SellingPartnerApi\Model\Dimensions $dimensions dimensions
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
     * @return \SellingPartnerApi\Model\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \SellingPartnerApi\Model\Weight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets tier
     *
     * @return int
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param int $tier Number of layers per pallet.
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets block
     *
     * @return int
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param int $block Number of cartons per layer on the pallet.
     *
     * @return $this
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets inner_containers_details
     *
     * @return \SellingPartnerApi\Model\InnerContainersDetails
     */
    public function getInnerContainersDetails()
    {
        return $this->container['inner_containers_details'];
    }

    /**
     * Sets inner_containers_details
     *
     * @param \SellingPartnerApi\Model\InnerContainersDetails $inner_containers_details inner_containers_details
     *
     * @return $this
     */
    public function setInnerContainersDetails($inner_containers_details)
    {
        $this->container['inner_containers_details'] = $inner_containers_details;

        return $this;
    }

    /**
     * Gets packed_items
     *
     * @return \SellingPartnerApi\Model\PackedItems[]
     */
    public function getPackedItems()
    {
        return $this->container['packed_items'];
    }

    /**
     * Sets packed_items
     *
     * @param \SellingPartnerApi\Model\PackedItems[] $packed_items A list of packed items.
     *
     * @return $this
     */
    public function setPackedItems($packed_items)
    {
        $this->container['packed_items'] = $packed_items;

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


