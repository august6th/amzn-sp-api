<?php
/**
 * Pallet
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
 * Pallet Class Doc Comment
 *
 * @category Class
 * @description Details of the Pallet/Tare being shipped.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Pallet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Pallet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pallet_identifiers' => '\SellingPartnerApi\Model\ContainerIdentification[]',
        'tier' => 'int',
        'block' => 'int',
        'dimensions' => '\SellingPartnerApi\Model\Dimensions',
        'weight' => '\SellingPartnerApi\Model\Weight',
        'carton_reference_details' => '\SellingPartnerApi\Model\CartonReferenceDetails',
        'items' => '\SellingPartnerApi\Model\ContainerItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pallet_identifiers' => null,
        'tier' => null,
        'block' => null,
        'dimensions' => null,
        'weight' => null,
        'carton_reference_details' => null,
        'items' => null
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
        'pallet_identifiers' => 'palletIdentifiers',
        'tier' => 'tier',
        'block' => 'block',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'carton_reference_details' => 'cartonReferenceDetails',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pallet_identifiers' => 'setPalletIdentifiers',
        'tier' => 'setTier',
        'block' => 'setBlock',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'carton_reference_details' => 'setCartonReferenceDetails',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pallet_identifiers' => 'getPalletIdentifiers',
        'tier' => 'getTier',
        'block' => 'getBlock',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'carton_reference_details' => 'getCartonReferenceDetails',
        'items' => 'getItems'
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
        $this->container['pallet_identifiers'] = isset($data['pallet_identifiers']) ? $data['pallet_identifiers'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['block'] = isset($data['block']) ? $data['block'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['carton_reference_details'] = isset($data['carton_reference_details']) ? $data['carton_reference_details'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pallet_identifiers'] === null) {
            $invalidProperties[] = "'pallet_identifiers' can't be null";
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
     * Gets pallet_identifiers
     *
     * @return \SellingPartnerApi\Model\ContainerIdentification[]
     */
    public function getPalletIdentifiers()
    {
        return $this->container['pallet_identifiers'];
    }

    /**
     * Sets pallet_identifiers
     *
     * @param \SellingPartnerApi\Model\ContainerIdentification[] $pallet_identifiers A list of pallet identifiers.
     *
     * @return $this
     */
    public function setPalletIdentifiers($pallet_identifiers)
    {
        $this->container['pallet_identifiers'] = $pallet_identifiers;

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
     * @param int $tier Number of layers per pallet. Only applicable to container type Pallet.
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
     * @param int $block Number of cartons per layer on the pallet. Only applicable to container type Pallet.
     *
     * @return $this
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

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
     * Gets carton_reference_details
     *
     * @return \SellingPartnerApi\Model\CartonReferenceDetails
     */
    public function getCartonReferenceDetails()
    {
        return $this->container['carton_reference_details'];
    }

    /**
     * Sets carton_reference_details
     *
     * @param \SellingPartnerApi\Model\CartonReferenceDetails $carton_reference_details Carton reference details.
     *
     * @return $this
     */
    public function setCartonReferenceDetails($carton_reference_details)
    {
        $this->container['carton_reference_details'] = $carton_reference_details;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \SellingPartnerApi\Model\ContainerItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SellingPartnerApi\Model\ContainerItem[] $items A list of container item details.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


