<?php
/**
 * ConfirmShipmentRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\OrdersV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ConfirmShipmentRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for an shipment confirmation.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfirmShipmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConfirmShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'packageDetail' => '\SellingPartnerApi\Model\OrdersV0\PackageDetail',
'codCollectionMethod' => 'string',
'marketplaceId' => '\SellingPartnerApi\Model\OrdersV0\MarketplaceId'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'packageDetail' => null,
'codCollectionMethod' => null,
'marketplaceId' => null    ];

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
        'packageDetail' => 'packageDetail',
'codCollectionMethod' => 'codCollectionMethod',
'marketplaceId' => 'marketplaceId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packageDetail' => 'setPackageDetail',
'codCollectionMethod' => 'setCodCollectionMethod',
'marketplaceId' => 'setMarketplaceId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packageDetail' => 'getPackageDetail',
'codCollectionMethod' => 'getCodCollectionMethod',
'marketplaceId' => 'getMarketplaceId'    ];

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

    const COD_COLLECTION_METHOD_DIRECT_PAYMENT = 'DirectPayment';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodCollectionMethodAllowableValues()
    {
        return [
            self::COD_COLLECTION_METHOD_DIRECT_PAYMENT,        ];
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
        $this->container['packageDetail'] = isset($data['packageDetail']) ? $data['packageDetail'] : null;
        $this->container['codCollectionMethod'] = isset($data['codCollectionMethod']) ? $data['codCollectionMethod'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['packageDetail'] === null) {
            $invalidProperties[] = "'packageDetail' can't be null";
        }
        $allowedValues = $this->getCodCollectionMethodAllowableValues();
        if (!is_null($this->container['codCollectionMethod']) && !in_array($this->container['codCollectionMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'codCollectionMethod', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
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
     * Gets packageDetail
     *
     * @return \SellingPartnerApi\Model\OrdersV0\PackageDetail
     */
    public function getPackageDetail()
    {
        return $this->container['packageDetail'];
    }

    /**
     * Sets packageDetail
     *
     * @param \SellingPartnerApi\Model\OrdersV0\PackageDetail $packageDetail packageDetail
     *
     * @return $this
     */
    public function setPackageDetail($packageDetail)
    {
        $this->container['packageDetail'] = $packageDetail;

        return $this;
    }

    /**
     * Gets codCollectionMethod
     *
     * @return string
     */
    public function getCodCollectionMethod()
    {
        return $this->container['codCollectionMethod'];
    }

    /**
     * Sets codCollectionMethod
     *
     * @param string $codCollectionMethod The cod collection method, support in JP only.
     *
     * @return $this
     */
    public function setCodCollectionMethod($codCollectionMethod)
    {
        $allowedValues = $this->getCodCollectionMethodAllowableValues();
        if (!is_null($codCollectionMethod) && !in_array($codCollectionMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'codCollectionMethod', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['codCollectionMethod'] = $codCollectionMethod;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return \SellingPartnerApi\Model\OrdersV0\MarketplaceId
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param \SellingPartnerApi\Model\OrdersV0\MarketplaceId $marketplaceId marketplaceId
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

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
