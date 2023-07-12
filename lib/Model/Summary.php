<?php
/**
 * Summary
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
 * Summary Class Doc Comment
 *
 * @category Class
 * @description Contains price information about the product, including the LowestPrices and BuyBoxPrices, the ListPrice, the SuggestedLowerPricePlusShipping, and NumberOfOffers and NumberOfBuyBoxEligibleOffers.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Summary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_offer_count' => 'int',
        'number_of_offers' => '\SellingPartnerApi\Model\NumberOfOffers',
        'lowest_prices' => '\SellingPartnerApi\Model\LowestPrices',
        'buy_box_prices' => '\SellingPartnerApi\Model\BuyBoxPrices',
        'list_price' => '\SellingPartnerApi\Model\MoneyType',
        'competitive_price_threshold' => '\SellingPartnerApi\Model\MoneyType',
        'suggested_lower_price_plus_shipping' => '\SellingPartnerApi\Model\MoneyType',
        'sales_rankings' => '\SellingPartnerApi\Model\SalesRankList',
        'buy_box_eligible_offers' => '\SellingPartnerApi\Model\BuyBoxEligibleOffers',
        'offers_available_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_offer_count' => 'int32',
        'number_of_offers' => null,
        'lowest_prices' => null,
        'buy_box_prices' => null,
        'list_price' => null,
        'competitive_price_threshold' => null,
        'suggested_lower_price_plus_shipping' => null,
        'sales_rankings' => null,
        'buy_box_eligible_offers' => null,
        'offers_available_time' => 'date-time'
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
        'total_offer_count' => 'TotalOfferCount',
        'number_of_offers' => 'NumberOfOffers',
        'lowest_prices' => 'LowestPrices',
        'buy_box_prices' => 'BuyBoxPrices',
        'list_price' => 'ListPrice',
        'competitive_price_threshold' => 'CompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'SuggestedLowerPricePlusShipping',
        'sales_rankings' => 'SalesRankings',
        'buy_box_eligible_offers' => 'BuyBoxEligibleOffers',
        'offers_available_time' => 'OffersAvailableTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_offer_count' => 'setTotalOfferCount',
        'number_of_offers' => 'setNumberOfOffers',
        'lowest_prices' => 'setLowestPrices',
        'buy_box_prices' => 'setBuyBoxPrices',
        'list_price' => 'setListPrice',
        'competitive_price_threshold' => 'setCompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'setSuggestedLowerPricePlusShipping',
        'sales_rankings' => 'setSalesRankings',
        'buy_box_eligible_offers' => 'setBuyBoxEligibleOffers',
        'offers_available_time' => 'setOffersAvailableTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_offer_count' => 'getTotalOfferCount',
        'number_of_offers' => 'getNumberOfOffers',
        'lowest_prices' => 'getLowestPrices',
        'buy_box_prices' => 'getBuyBoxPrices',
        'list_price' => 'getListPrice',
        'competitive_price_threshold' => 'getCompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'getSuggestedLowerPricePlusShipping',
        'sales_rankings' => 'getSalesRankings',
        'buy_box_eligible_offers' => 'getBuyBoxEligibleOffers',
        'offers_available_time' => 'getOffersAvailableTime'
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
        $this->container['total_offer_count'] = isset($data['total_offer_count']) ? $data['total_offer_count'] : null;
        $this->container['number_of_offers'] = isset($data['number_of_offers']) ? $data['number_of_offers'] : null;
        $this->container['lowest_prices'] = isset($data['lowest_prices']) ? $data['lowest_prices'] : null;
        $this->container['buy_box_prices'] = isset($data['buy_box_prices']) ? $data['buy_box_prices'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['competitive_price_threshold'] = isset($data['competitive_price_threshold']) ? $data['competitive_price_threshold'] : null;
        $this->container['suggested_lower_price_plus_shipping'] = isset($data['suggested_lower_price_plus_shipping']) ? $data['suggested_lower_price_plus_shipping'] : null;
        $this->container['sales_rankings'] = isset($data['sales_rankings']) ? $data['sales_rankings'] : null;
        $this->container['buy_box_eligible_offers'] = isset($data['buy_box_eligible_offers']) ? $data['buy_box_eligible_offers'] : null;
        $this->container['offers_available_time'] = isset($data['offers_available_time']) ? $data['offers_available_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_offer_count'] === null) {
            $invalidProperties[] = "'total_offer_count' can't be null";
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
     * Gets total_offer_count
     *
     * @return int
     */
    public function getTotalOfferCount()
    {
        return $this->container['total_offer_count'];
    }

    /**
     * Sets total_offer_count
     *
     * @param int $total_offer_count The number of unique offers contained in NumberOfOffers.
     *
     * @return $this
     */
    public function setTotalOfferCount($total_offer_count)
    {
        $this->container['total_offer_count'] = $total_offer_count;

        return $this;
    }

    /**
     * Gets number_of_offers
     *
     * @return \SellingPartnerApi\Model\NumberOfOffers
     */
    public function getNumberOfOffers()
    {
        return $this->container['number_of_offers'];
    }

    /**
     * Sets number_of_offers
     *
     * @param \SellingPartnerApi\Model\NumberOfOffers $number_of_offers A list that contains the total number of offers for the item for the given conditions and fulfillment channels.
     *
     * @return $this
     */
    public function setNumberOfOffers($number_of_offers)
    {
        $this->container['number_of_offers'] = $number_of_offers;

        return $this;
    }

    /**
     * Gets lowest_prices
     *
     * @return \SellingPartnerApi\Model\LowestPrices
     */
    public function getLowestPrices()
    {
        return $this->container['lowest_prices'];
    }

    /**
     * Sets lowest_prices
     *
     * @param \SellingPartnerApi\Model\LowestPrices $lowest_prices A list of the lowest prices for the item.
     *
     * @return $this
     */
    public function setLowestPrices($lowest_prices)
    {
        $this->container['lowest_prices'] = $lowest_prices;

        return $this;
    }

    /**
     * Gets buy_box_prices
     *
     * @return \SellingPartnerApi\Model\BuyBoxPrices
     */
    public function getBuyBoxPrices()
    {
        return $this->container['buy_box_prices'];
    }

    /**
     * Sets buy_box_prices
     *
     * @param \SellingPartnerApi\Model\BuyBoxPrices $buy_box_prices A list of item prices.
     *
     * @return $this
     */
    public function setBuyBoxPrices($buy_box_prices)
    {
        $this->container['buy_box_prices'] = $buy_box_prices;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return \SellingPartnerApi\Model\MoneyType
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param \SellingPartnerApi\Model\MoneyType $list_price The list price of the item as suggested by the manufacturer.
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets competitive_price_threshold
     *
     * @return \SellingPartnerApi\Model\MoneyType
     */
    public function getCompetitivePriceThreshold()
    {
        return $this->container['competitive_price_threshold'];
    }

    /**
     * Sets competitive_price_threshold
     *
     * @param \SellingPartnerApi\Model\MoneyType $competitive_price_threshold This price is based on competitive prices from other retailers (excluding other Amazon sellers). The offer may be ineligible for the Buy Box if the seller's price + shipping (minus Amazon Points) is greater than this competitive price.
     *
     * @return $this
     */
    public function setCompetitivePriceThreshold($competitive_price_threshold)
    {
        $this->container['competitive_price_threshold'] = $competitive_price_threshold;

        return $this;
    }

    /**
     * Gets suggested_lower_price_plus_shipping
     *
     * @return \SellingPartnerApi\Model\MoneyType
     */
    public function getSuggestedLowerPricePlusShipping()
    {
        return $this->container['suggested_lower_price_plus_shipping'];
    }

    /**
     * Sets suggested_lower_price_plus_shipping
     *
     * @param \SellingPartnerApi\Model\MoneyType $suggested_lower_price_plus_shipping The suggested lower price of the item, including shipping and Amazon Points. The suggested lower price is based on a range of factors, including historical selling prices, recent Buy Box-eligible prices, and input from customers for your products.
     *
     * @return $this
     */
    public function setSuggestedLowerPricePlusShipping($suggested_lower_price_plus_shipping)
    {
        $this->container['suggested_lower_price_plus_shipping'] = $suggested_lower_price_plus_shipping;

        return $this;
    }

    /**
     * Gets sales_rankings
     *
     * @return \SellingPartnerApi\Model\SalesRankList
     */
    public function getSalesRankings()
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings
     *
     * @param \SellingPartnerApi\Model\SalesRankList $sales_rankings A list that contains the sales rank of the item in the given product categories.
     *
     * @return $this
     */
    public function setSalesRankings($sales_rankings)
    {
        $this->container['sales_rankings'] = $sales_rankings;

        return $this;
    }

    /**
     * Gets buy_box_eligible_offers
     *
     * @return \SellingPartnerApi\Model\BuyBoxEligibleOffers
     */
    public function getBuyBoxEligibleOffers()
    {
        return $this->container['buy_box_eligible_offers'];
    }

    /**
     * Sets buy_box_eligible_offers
     *
     * @param \SellingPartnerApi\Model\BuyBoxEligibleOffers $buy_box_eligible_offers A list that contains the total number of offers that are eligible for the Buy Box for the given conditions and fulfillment channels.
     *
     * @return $this
     */
    public function setBuyBoxEligibleOffers($buy_box_eligible_offers)
    {
        $this->container['buy_box_eligible_offers'] = $buy_box_eligible_offers;

        return $this;
    }

    /**
     * Gets offers_available_time
     *
     * @return \DateTime
     */
    public function getOffersAvailableTime()
    {
        return $this->container['offers_available_time'];
    }

    /**
     * Sets offers_available_time
     *
     * @param \DateTime $offers_available_time When the status is ActiveButTooSoonForProcessing, this is the time when the offers will be available for processing.
     *
     * @return $this
     */
    public function setOffersAvailableTime($offers_available_time)
    {
        $this->container['offers_available_time'] = $offers_available_time;

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


