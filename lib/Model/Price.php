<?php
/**
 * Price
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products.  For more information, see the [Product Pricing v2022-05-01 Use Case Guide](doc:product-pricing-api-v2022-05-01-use-case-guide).
 *
 * OpenAPI spec version: 2022-05-01
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
 * Price Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Price implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Price';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'listing_price' => '\SellingPartnerApi\Model\MoneyType',
        'shipping_price' => '\SellingPartnerApi\Model\MoneyType',
        'points' => '\SellingPartnerApi\Model\Points'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'listing_price' => null,
        'shipping_price' => null,
        'points' => null
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
        'listing_price' => 'listingPrice',
        'shipping_price' => 'shippingPrice',
        'points' => 'points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'listing_price' => 'setListingPrice',
        'shipping_price' => 'setShippingPrice',
        'points' => 'setPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'listing_price' => 'getListingPrice',
        'shipping_price' => 'getShippingPrice',
        'points' => 'getPoints'
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
        $this->container['listing_price'] = isset($data['listing_price']) ? $data['listing_price'] : null;
        $this->container['shipping_price'] = isset($data['shipping_price']) ? $data['shipping_price'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['listing_price'] === null) {
            $invalidProperties[] = "'listing_price' can't be null";
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
     * Gets listing_price
     *
     * @return \SellingPartnerApi\Model\MoneyType
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price
     *
     * @param \SellingPartnerApi\Model\MoneyType $listing_price The listing price of the item excluding any promotions.
     *
     * @return $this
     */
    public function setListingPrice($listing_price)
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets shipping_price
     *
     * @return \SellingPartnerApi\Model\MoneyType
     */
    public function getShippingPrice()
    {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price
     *
     * @param \SellingPartnerApi\Model\MoneyType $shipping_price The shipping cost of the product. Note that the shipping cost is not always available.
     *
     * @return $this
     */
    public function setShippingPrice($shipping_price)
    {
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }

    /**
     * Gets points
     *
     * @return \SellingPartnerApi\Model\Points
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \SellingPartnerApi\Model\Points $points The number of Amazon Points offered with the purchase of an item, and their monetary value.
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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

