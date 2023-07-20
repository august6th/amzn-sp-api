<?php
/**
 * FeatureSku
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FulfillmentOutbound20200701;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * FeatureSku Class Doc Comment
 *
 * @category Class
 * @description Information about an SKU, including the count available, identifiers, and a list of overlapping SKUs that share the same inventory pool.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeatureSku implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FeatureSku';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sellerSku' => 'string',
'fnSku' => 'string',
'asin' => 'string',
'skuCount' => 'float',
'overlappingSkus' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sellerSku' => null,
'fnSku' => null,
'asin' => null,
'skuCount' => null,
'overlappingSkus' => null    ];

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
        'sellerSku' => 'sellerSku',
'fnSku' => 'fnSku',
'asin' => 'asin',
'skuCount' => 'skuCount',
'overlappingSkus' => 'overlappingSkus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerSku' => 'setSellerSku',
'fnSku' => 'setFnSku',
'asin' => 'setAsin',
'skuCount' => 'setSkuCount',
'overlappingSkus' => 'setOverlappingSkus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerSku' => 'getSellerSku',
'fnSku' => 'getFnSku',
'asin' => 'getAsin',
'skuCount' => 'getSkuCount',
'overlappingSkus' => 'getOverlappingSkus'    ];

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
        $this->container['sellerSku'] = isset($data['sellerSku']) ? $data['sellerSku'] : null;
        $this->container['fnSku'] = isset($data['fnSku']) ? $data['fnSku'] : null;
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['skuCount'] = isset($data['skuCount']) ? $data['skuCount'] : null;
        $this->container['overlappingSkus'] = isset($data['overlappingSkus']) ? $data['overlappingSkus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets sellerSku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['sellerSku'];
    }

    /**
     * Sets sellerSku
     *
     * @param string $sellerSku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     *
     * @return $this
     */
    public function setSellerSku($sellerSku)
    {
        $this->container['sellerSku'] = $sellerSku;

        return $this;
    }

    /**
     * Gets fnSku
     *
     * @return string
     */
    public function getFnSku()
    {
        return $this->container['fnSku'];
    }

    /**
     * Sets fnSku
     *
     * @param string $fnSku The unique SKU used by Amazon's fulfillment network.
     *
     * @return $this
     */
    public function setFnSku($fnSku)
    {
        $this->container['fnSku'] = $fnSku;

        return $this;
    }

    /**
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets skuCount
     *
     * @return float
     */
    public function getSkuCount()
    {
        return $this->container['skuCount'];
    }

    /**
     * Sets skuCount
     *
     * @param float $skuCount The number of SKUs available for this service.
     *
     * @return $this
     */
    public function setSkuCount($skuCount)
    {
        $this->container['skuCount'] = $skuCount;

        return $this;
    }

    /**
     * Gets overlappingSkus
     *
     * @return string[]
     */
    public function getOverlappingSkus()
    {
        return $this->container['overlappingSkus'];
    }

    /**
     * Sets overlappingSkus
     *
     * @param string[] $overlappingSkus Other seller SKUs that are shared across the same inventory.
     *
     * @return $this
     */
    public function setOverlappingSkus($overlappingSkus)
    {
        $this->container['overlappingSkus'] = $overlappingSkus;

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