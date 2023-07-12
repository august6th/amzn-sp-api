<?php
/**
 * ListOfferMetricsResponseOffer
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery (automatic or manual) of any replenishable item at a frequency chosen by the customer.
 *
 * OpenAPI spec version: 2022-11-07
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
 * ListOfferMetricsResponseOffer Class Doc Comment
 *
 * @category Class
 * @description An object which contains offer metrics.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListOfferMetricsResponseOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListOfferMetricsResponseOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asin' => 'string',
        'not_delivered_due_to_oos' => 'double',
        'total_subscriptions_revenue' => 'double',
        'shipped_subscription_units' => 'float',
        'active_subscriptions' => 'float',
        'revenue_penetration' => 'double',
        'next30_day_total_subscriptions_revenue' => 'double',
        'next60_day_total_subscriptions_revenue' => 'double',
        'next90_day_total_subscriptions_revenue' => 'double',
        'next30_day_shipped_subscription_units' => 'float',
        'next60_day_shipped_subscription_units' => 'float',
        'next90_day_shipped_subscription_units' => 'float',
        'time_interval' => '\SellingPartnerApi\Model\TimeInterval',
        'currency_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asin' => null,
        'not_delivered_due_to_oos' => 'double',
        'total_subscriptions_revenue' => 'double',
        'shipped_subscription_units' => 'int64',
        'active_subscriptions' => 'int64',
        'revenue_penetration' => 'double',
        'next30_day_total_subscriptions_revenue' => 'double',
        'next60_day_total_subscriptions_revenue' => 'double',
        'next90_day_total_subscriptions_revenue' => 'double',
        'next30_day_shipped_subscription_units' => 'int64',
        'next60_day_shipped_subscription_units' => 'int64',
        'next90_day_shipped_subscription_units' => 'int64',
        'time_interval' => null,
        'currency_code' => null
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
        'asin' => 'asin',
        'not_delivered_due_to_oos' => 'notDeliveredDueToOOS',
        'total_subscriptions_revenue' => 'totalSubscriptionsRevenue',
        'shipped_subscription_units' => 'shippedSubscriptionUnits',
        'active_subscriptions' => 'activeSubscriptions',
        'revenue_penetration' => 'revenuePenetration',
        'next30_day_total_subscriptions_revenue' => 'next30DayTotalSubscriptionsRevenue',
        'next60_day_total_subscriptions_revenue' => 'next60DayTotalSubscriptionsRevenue',
        'next90_day_total_subscriptions_revenue' => 'next90DayTotalSubscriptionsRevenue',
        'next30_day_shipped_subscription_units' => 'next30DayShippedSubscriptionUnits',
        'next60_day_shipped_subscription_units' => 'next60DayShippedSubscriptionUnits',
        'next90_day_shipped_subscription_units' => 'next90DayShippedSubscriptionUnits',
        'time_interval' => 'timeInterval',
        'currency_code' => 'currencyCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'not_delivered_due_to_oos' => 'setNotDeliveredDueToOos',
        'total_subscriptions_revenue' => 'setTotalSubscriptionsRevenue',
        'shipped_subscription_units' => 'setShippedSubscriptionUnits',
        'active_subscriptions' => 'setActiveSubscriptions',
        'revenue_penetration' => 'setRevenuePenetration',
        'next30_day_total_subscriptions_revenue' => 'setNext30DayTotalSubscriptionsRevenue',
        'next60_day_total_subscriptions_revenue' => 'setNext60DayTotalSubscriptionsRevenue',
        'next90_day_total_subscriptions_revenue' => 'setNext90DayTotalSubscriptionsRevenue',
        'next30_day_shipped_subscription_units' => 'setNext30DayShippedSubscriptionUnits',
        'next60_day_shipped_subscription_units' => 'setNext60DayShippedSubscriptionUnits',
        'next90_day_shipped_subscription_units' => 'setNext90DayShippedSubscriptionUnits',
        'time_interval' => 'setTimeInterval',
        'currency_code' => 'setCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'not_delivered_due_to_oos' => 'getNotDeliveredDueToOos',
        'total_subscriptions_revenue' => 'getTotalSubscriptionsRevenue',
        'shipped_subscription_units' => 'getShippedSubscriptionUnits',
        'active_subscriptions' => 'getActiveSubscriptions',
        'revenue_penetration' => 'getRevenuePenetration',
        'next30_day_total_subscriptions_revenue' => 'getNext30DayTotalSubscriptionsRevenue',
        'next60_day_total_subscriptions_revenue' => 'getNext60DayTotalSubscriptionsRevenue',
        'next90_day_total_subscriptions_revenue' => 'getNext90DayTotalSubscriptionsRevenue',
        'next30_day_shipped_subscription_units' => 'getNext30DayShippedSubscriptionUnits',
        'next60_day_shipped_subscription_units' => 'getNext60DayShippedSubscriptionUnits',
        'next90_day_shipped_subscription_units' => 'getNext90DayShippedSubscriptionUnits',
        'time_interval' => 'getTimeInterval',
        'currency_code' => 'getCurrencyCode'
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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['not_delivered_due_to_oos'] = isset($data['not_delivered_due_to_oos']) ? $data['not_delivered_due_to_oos'] : null;
        $this->container['total_subscriptions_revenue'] = isset($data['total_subscriptions_revenue']) ? $data['total_subscriptions_revenue'] : null;
        $this->container['shipped_subscription_units'] = isset($data['shipped_subscription_units']) ? $data['shipped_subscription_units'] : null;
        $this->container['active_subscriptions'] = isset($data['active_subscriptions']) ? $data['active_subscriptions'] : null;
        $this->container['revenue_penetration'] = isset($data['revenue_penetration']) ? $data['revenue_penetration'] : null;
        $this->container['next30_day_total_subscriptions_revenue'] = isset($data['next30_day_total_subscriptions_revenue']) ? $data['next30_day_total_subscriptions_revenue'] : null;
        $this->container['next60_day_total_subscriptions_revenue'] = isset($data['next60_day_total_subscriptions_revenue']) ? $data['next60_day_total_subscriptions_revenue'] : null;
        $this->container['next90_day_total_subscriptions_revenue'] = isset($data['next90_day_total_subscriptions_revenue']) ? $data['next90_day_total_subscriptions_revenue'] : null;
        $this->container['next30_day_shipped_subscription_units'] = isset($data['next30_day_shipped_subscription_units']) ? $data['next30_day_shipped_subscription_units'] : null;
        $this->container['next60_day_shipped_subscription_units'] = isset($data['next60_day_shipped_subscription_units']) ? $data['next60_day_shipped_subscription_units'] : null;
        $this->container['next90_day_shipped_subscription_units'] = isset($data['next90_day_shipped_subscription_units']) ? $data['next90_day_shipped_subscription_units'] : null;
        $this->container['time_interval'] = isset($data['time_interval']) ? $data['time_interval'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['not_delivered_due_to_oos']) && ($this->container['not_delivered_due_to_oos'] > 100)) {
            $invalidProperties[] = "invalid value for 'not_delivered_due_to_oos', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['not_delivered_due_to_oos']) && ($this->container['not_delivered_due_to_oos'] < 0)) {
            $invalidProperties[] = "invalid value for 'not_delivered_due_to_oos', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['total_subscriptions_revenue']) && ($this->container['total_subscriptions_revenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_subscriptions_revenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shipped_subscription_units']) && ($this->container['shipped_subscription_units'] < 0)) {
            $invalidProperties[] = "invalid value for 'shipped_subscription_units', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['active_subscriptions']) && ($this->container['active_subscriptions'] < 0)) {
            $invalidProperties[] = "invalid value for 'active_subscriptions', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['revenue_penetration']) && ($this->container['revenue_penetration'] > 100)) {
            $invalidProperties[] = "invalid value for 'revenue_penetration', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['revenue_penetration']) && ($this->container['revenue_penetration'] < 0)) {
            $invalidProperties[] = "invalid value for 'revenue_penetration', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next30_day_total_subscriptions_revenue']) && ($this->container['next30_day_total_subscriptions_revenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'next30_day_total_subscriptions_revenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next60_day_total_subscriptions_revenue']) && ($this->container['next60_day_total_subscriptions_revenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'next60_day_total_subscriptions_revenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next90_day_total_subscriptions_revenue']) && ($this->container['next90_day_total_subscriptions_revenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'next90_day_total_subscriptions_revenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next30_day_shipped_subscription_units']) && ($this->container['next30_day_shipped_subscription_units'] < 0)) {
            $invalidProperties[] = "invalid value for 'next30_day_shipped_subscription_units', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next60_day_shipped_subscription_units']) && ($this->container['next60_day_shipped_subscription_units'] < 0)) {
            $invalidProperties[] = "invalid value for 'next60_day_shipped_subscription_units', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next90_day_shipped_subscription_units']) && ($this->container['next90_day_shipped_subscription_units'] < 0)) {
            $invalidProperties[] = "invalid value for 'next90_day_shipped_subscription_units', must be bigger than or equal to 0.";
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
     * @param string $asin The Amazon Standard Identification Number (ASIN).
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets not_delivered_due_to_oos
     *
     * @return double
     */
    public function getNotDeliveredDueToOos()
    {
        return $this->container['not_delivered_due_to_oos'];
    }

    /**
     * Sets not_delivered_due_to_oos
     *
     * @param double $not_delivered_due_to_oos The percentage of items that were not shipped out of the total shipped units over a period of time due to being out of stock. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setNotDeliveredDueToOos($not_delivered_due_to_oos)
    {

        if (!is_null($not_delivered_due_to_oos) && ($not_delivered_due_to_oos > 100)) {
            throw new \InvalidArgumentException('invalid value for $not_delivered_due_to_oos when calling ListOfferMetricsResponseOffer., must be smaller than or equal to 100.');
        }
        if (!is_null($not_delivered_due_to_oos) && ($not_delivered_due_to_oos < 0)) {
            throw new \InvalidArgumentException('invalid value for $not_delivered_due_to_oos when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['not_delivered_due_to_oos'] = $not_delivered_due_to_oos;

        return $this;
    }

    /**
     * Gets total_subscriptions_revenue
     *
     * @return double
     */
    public function getTotalSubscriptionsRevenue()
    {
        return $this->container['total_subscriptions_revenue'];
    }

    /**
     * Sets total_subscriptions_revenue
     *
     * @param double $total_subscriptions_revenue The revenue generated from subscriptions over a period of time. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setTotalSubscriptionsRevenue($total_subscriptions_revenue)
    {

        if (!is_null($total_subscriptions_revenue) && ($total_subscriptions_revenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_subscriptions_revenue when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['total_subscriptions_revenue'] = $total_subscriptions_revenue;

        return $this;
    }

    /**
     * Gets shipped_subscription_units
     *
     * @return float
     */
    public function getShippedSubscriptionUnits()
    {
        return $this->container['shipped_subscription_units'];
    }

    /**
     * Sets shipped_subscription_units
     *
     * @param float $shipped_subscription_units The number of units shipped to the subscribers over a period of time. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setShippedSubscriptionUnits($shipped_subscription_units)
    {

        if (!is_null($shipped_subscription_units) && ($shipped_subscription_units < 0)) {
            throw new \InvalidArgumentException('invalid value for $shipped_subscription_units when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['shipped_subscription_units'] = $shipped_subscription_units;

        return $this;
    }

    /**
     * Gets active_subscriptions
     *
     * @return float
     */
    public function getActiveSubscriptions()
    {
        return $this->container['active_subscriptions'];
    }

    /**
     * Sets active_subscriptions
     *
     * @param float $active_subscriptions The number of active subscriptions present at the end of the period. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setActiveSubscriptions($active_subscriptions)
    {

        if (!is_null($active_subscriptions) && ($active_subscriptions < 0)) {
            throw new \InvalidArgumentException('invalid value for $active_subscriptions when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['active_subscriptions'] = $active_subscriptions;

        return $this;
    }

    /**
     * Gets revenue_penetration
     *
     * @return double
     */
    public function getRevenuePenetration()
    {
        return $this->container['revenue_penetration'];
    }

    /**
     * Sets revenue_penetration
     *
     * @param double $revenue_penetration The percentage of total program revenue out of total product revenue. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setRevenuePenetration($revenue_penetration)
    {

        if (!is_null($revenue_penetration) && ($revenue_penetration > 100)) {
            throw new \InvalidArgumentException('invalid value for $revenue_penetration when calling ListOfferMetricsResponseOffer., must be smaller than or equal to 100.');
        }
        if (!is_null($revenue_penetration) && ($revenue_penetration < 0)) {
            throw new \InvalidArgumentException('invalid value for $revenue_penetration when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['revenue_penetration'] = $revenue_penetration;

        return $this;
    }

    /**
     * Gets next30_day_total_subscriptions_revenue
     *
     * @return double
     */
    public function getNext30DayTotalSubscriptionsRevenue()
    {
        return $this->container['next30_day_total_subscriptions_revenue'];
    }

    /**
     * Sets next30_day_total_subscriptions_revenue
     *
     * @param double $next30_day_total_subscriptions_revenue The forecasted total subscription revenue for the next 30 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext30DayTotalSubscriptionsRevenue($next30_day_total_subscriptions_revenue)
    {

        if (!is_null($next30_day_total_subscriptions_revenue) && ($next30_day_total_subscriptions_revenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $next30_day_total_subscriptions_revenue when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next30_day_total_subscriptions_revenue'] = $next30_day_total_subscriptions_revenue;

        return $this;
    }

    /**
     * Gets next60_day_total_subscriptions_revenue
     *
     * @return double
     */
    public function getNext60DayTotalSubscriptionsRevenue()
    {
        return $this->container['next60_day_total_subscriptions_revenue'];
    }

    /**
     * Sets next60_day_total_subscriptions_revenue
     *
     * @param double $next60_day_total_subscriptions_revenue The forecasted total subscription revenue for the next 60 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext60DayTotalSubscriptionsRevenue($next60_day_total_subscriptions_revenue)
    {

        if (!is_null($next60_day_total_subscriptions_revenue) && ($next60_day_total_subscriptions_revenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $next60_day_total_subscriptions_revenue when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next60_day_total_subscriptions_revenue'] = $next60_day_total_subscriptions_revenue;

        return $this;
    }

    /**
     * Gets next90_day_total_subscriptions_revenue
     *
     * @return double
     */
    public function getNext90DayTotalSubscriptionsRevenue()
    {
        return $this->container['next90_day_total_subscriptions_revenue'];
    }

    /**
     * Sets next90_day_total_subscriptions_revenue
     *
     * @param double $next90_day_total_subscriptions_revenue The forecasted total subscription revenue for the next 90 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext90DayTotalSubscriptionsRevenue($next90_day_total_subscriptions_revenue)
    {

        if (!is_null($next90_day_total_subscriptions_revenue) && ($next90_day_total_subscriptions_revenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $next90_day_total_subscriptions_revenue when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next90_day_total_subscriptions_revenue'] = $next90_day_total_subscriptions_revenue;

        return $this;
    }

    /**
     * Gets next30_day_shipped_subscription_units
     *
     * @return float
     */
    public function getNext30DayShippedSubscriptionUnits()
    {
        return $this->container['next30_day_shipped_subscription_units'];
    }

    /**
     * Sets next30_day_shipped_subscription_units
     *
     * @param float $next30_day_shipped_subscription_units The forecasted shipped subscription units for the next 30 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext30DayShippedSubscriptionUnits($next30_day_shipped_subscription_units)
    {

        if (!is_null($next30_day_shipped_subscription_units) && ($next30_day_shipped_subscription_units < 0)) {
            throw new \InvalidArgumentException('invalid value for $next30_day_shipped_subscription_units when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next30_day_shipped_subscription_units'] = $next30_day_shipped_subscription_units;

        return $this;
    }

    /**
     * Gets next60_day_shipped_subscription_units
     *
     * @return float
     */
    public function getNext60DayShippedSubscriptionUnits()
    {
        return $this->container['next60_day_shipped_subscription_units'];
    }

    /**
     * Sets next60_day_shipped_subscription_units
     *
     * @param float $next60_day_shipped_subscription_units The forecasted shipped subscription units for the next 60 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext60DayShippedSubscriptionUnits($next60_day_shipped_subscription_units)
    {

        if (!is_null($next60_day_shipped_subscription_units) && ($next60_day_shipped_subscription_units < 0)) {
            throw new \InvalidArgumentException('invalid value for $next60_day_shipped_subscription_units when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next60_day_shipped_subscription_units'] = $next60_day_shipped_subscription_units;

        return $this;
    }

    /**
     * Gets next90_day_shipped_subscription_units
     *
     * @return float
     */
    public function getNext90DayShippedSubscriptionUnits()
    {
        return $this->container['next90_day_shipped_subscription_units'];
    }

    /**
     * Sets next90_day_shipped_subscription_units
     *
     * @param float $next90_day_shipped_subscription_units The forecasted shipped subscription units for the next 90 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext90DayShippedSubscriptionUnits($next90_day_shipped_subscription_units)
    {

        if (!is_null($next90_day_shipped_subscription_units) && ($next90_day_shipped_subscription_units < 0)) {
            throw new \InvalidArgumentException('invalid value for $next90_day_shipped_subscription_units when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next90_day_shipped_subscription_units'] = $next90_day_shipped_subscription_units;

        return $this;
    }

    /**
     * Gets time_interval
     *
     * @return \SellingPartnerApi\Model\TimeInterval
     */
    public function getTimeInterval()
    {
        return $this->container['time_interval'];
    }

    /**
     * Sets time_interval
     *
     * @param \SellingPartnerApi\Model\TimeInterval $time_interval A time interval used to compute metrics.
     *
     * @return $this
     */
    public function setTimeInterval($time_interval)
    {
        $this->container['time_interval'] = $time_interval;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code The currency code in ISO 4217 format.
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

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

