<?php
/**
 * OfferType
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
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
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
 * OfferType Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OfferType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OfferType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'offer_type' => '\SellingPartnerApi\Model\OfferCustomerType',
        'buying_price' => '\SellingPartnerApi\Model\PriceType',
        'regular_price' => '\SellingPartnerApi\Model\MoneyType',
        'business_price' => '\SellingPartnerApi\Model\MoneyType',
        'quantity_discount_prices' => '\SellingPartnerApi\Model\QuantityDiscountPriceType[]',
        'fulfillment_channel' => 'string',
        'item_condition' => 'string',
        'item_sub_condition' => 'string',
        'seller_sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'offer_type' => null,
        'buying_price' => null,
        'regular_price' => null,
        'business_price' => null,
        'quantity_discount_prices' => null,
        'fulfillment_channel' => null,
        'item_condition' => null,
        'item_sub_condition' => null,
        'seller_sku' => null
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
        'offer_type' => 'offerType',
        'buying_price' => 'BuyingPrice',
        'regular_price' => 'RegularPrice',
        'business_price' => 'businessPrice',
        'quantity_discount_prices' => 'quantityDiscountPrices',
        'fulfillment_channel' => 'FulfillmentChannel',
        'item_condition' => 'ItemCondition',
        'item_sub_condition' => 'ItemSubCondition',
        'seller_sku' => 'SellerSKU'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_type' => 'setOfferType',
        'buying_price' => 'setBuyingPrice',
        'regular_price' => 'setRegularPrice',
        'business_price' => 'setBusinessPrice',
        'quantity_discount_prices' => 'setQuantityDiscountPrices',
        'fulfillment_channel' => 'setFulfillmentChannel',
        'item_condition' => 'setItemCondition',
        'item_sub_condition' => 'setItemSubCondition',
        'seller_sku' => 'setSellerSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_type' => 'getOfferType',
        'buying_price' => 'getBuyingPrice',
        'regular_price' => 'getRegularPrice',
        'business_price' => 'getBusinessPrice',
        'quantity_discount_prices' => 'getQuantityDiscountPrices',
        'fulfillment_channel' => 'getFulfillmentChannel',
        'item_condition' => 'getItemCondition',
        'item_sub_condition' => 'getItemSubCondition',
        'seller_sku' => 'getSellerSku'
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
        $this->container['offer_type'] = isset($data['offer_type']) ? $data['offer_type'] : null;
        $this->container['buying_price'] = isset($data['buying_price']) ? $data['buying_price'] : null;
        $this->container['regular_price'] = isset($data['regular_price']) ? $data['regular_price'] : null;
        $this->container['business_price'] = isset($data['business_price']) ? $data['business_price'] : null;
        $this->container['quantity_discount_prices'] = isset($data['quantity_discount_prices']) ? $data['quantity_discount_prices'] : null;
        $this->container['fulfillment_channel'] = isset($data['fulfillment_channel']) ? $data['fulfillment_channel'] : null;
        $this->container['item_condition'] = isset($data['item_condition']) ? $data['item_condition'] : null;
        $this->container['item_sub_condition'] = isset($data['item_sub_condition']) ? $data['item_sub_condition'] : null;
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['buying_price'] === null) {
            $invalidProperties[] = "'buying_price' can't be null";
        }
        if ($this->container['regular_price'] === null) {
            $invalidProperties[] = "'regular_price' can't be null";
        }
        if ($this->container['fulfillment_channel'] === null) {
            $invalidProperties[] = "'fulfillment_channel' can't be null";
        }
        if ($this->container['item_condition'] === null) {
            $invalidProperties[] = "'item_condition' can't be null";
        }
        if ($this->container['item_sub_condition'] === null) {
            $invalidProperties[] = "'item_sub_condition' can't be null";
        }
        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
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
     * Gets offer_type
     *
     * @return \SellingPartnerApi\Model\OfferCustomerType
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type
     *
     * @param \SellingPartnerApi\Model\OfferCustomerType $offer_type Indicates the type of customer that the offer is valid for.
     *
     * @return $this
     */
    public function setOfferType($offer_type)
    {
        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets buying_price
     *
     * @return \SellingPartnerApi\Model\PriceType
     */
    public function getBuyingPrice()
    {
        return $this->container['buying_price'];
    }

    /**
     * Sets buying_price
     *
     * @param \SellingPartnerApi\Model\PriceType $buying_price Contains pricing information that includes promotions and contains the shipping cost.
     *
     * @return $this
     */
    public function setBuyingPrice($buying_price)
    {
        $this->container['buying_price'] = $buying_price;

        return $this;
    }

    /**
     * Gets regular_price
     *
     * @return \SellingPartnerApi\Model\MoneyType
     */
    public function getRegularPrice()
    {
        return $this->container['regular_price'];
    }

    /**
     * Sets regular_price
     *
     * @param \SellingPartnerApi\Model\MoneyType $regular_price The current price excluding any promotions that apply to the product. Excludes the shipping cost.
     *
     * @return $this
     */
    public function setRegularPrice($regular_price)
    {
        $this->container['regular_price'] = $regular_price;

        return $this;
    }

    /**
     * Gets business_price
     *
     * @return \SellingPartnerApi\Model\MoneyType
     */
    public function getBusinessPrice()
    {
        return $this->container['business_price'];
    }

    /**
     * Sets business_price
     *
     * @param \SellingPartnerApi\Model\MoneyType $business_price The current listing price for Business buyers.
     *
     * @return $this
     */
    public function setBusinessPrice($business_price)
    {
        $this->container['business_price'] = $business_price;

        return $this;
    }

    /**
     * Gets quantity_discount_prices
     *
     * @return \SellingPartnerApi\Model\QuantityDiscountPriceType[]
     */
    public function getQuantityDiscountPrices()
    {
        return $this->container['quantity_discount_prices'];
    }

    /**
     * Sets quantity_discount_prices
     *
     * @param \SellingPartnerApi\Model\QuantityDiscountPriceType[] $quantity_discount_prices quantity_discount_prices
     *
     * @return $this
     */
    public function setQuantityDiscountPrices($quantity_discount_prices)
    {
        $this->container['quantity_discount_prices'] = $quantity_discount_prices;

        return $this;
    }

    /**
     * Gets fulfillment_channel
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel
     *
     * @param string $fulfillment_channel The fulfillment channel for the offer listing. Possible values:  * Amazon - Fulfilled by Amazon. * Merchant - Fulfilled by the seller.
     *
     * @return $this
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets item_condition
     *
     * @return string
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition
     *
     * @param string $item_condition The item condition for the offer listing. Possible values: New, Used, Collectible, Refurbished, or Club.
     *
     * @return $this
     */
    public function setItemCondition($item_condition)
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets item_sub_condition
     *
     * @return string
     */
    public function getItemSubCondition()
    {
        return $this->container['item_sub_condition'];
    }

    /**
     * Sets item_sub_condition
     *
     * @param string $item_sub_condition The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return $this
     */
    public function setItemSubCondition($item_sub_condition)
    {
        $this->container['item_sub_condition'] = $item_sub_condition;

        return $this;
    }

    /**
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller stock keeping unit (SKU) of the item.
     *
     * @return $this
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

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


