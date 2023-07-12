<?php
/**
 * ListOffersRequestFilters
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
 * ListOffersRequestFilters Class Doc Comment
 *
 * @category Class
 * @description Use these parameters to filter results. Any result must match all of the provided parameters. For any parameter that is an array, the result must match at least one element in the provided array.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListOffersRequestFilters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListOffersRequestFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_id' => '\SellingPartnerApi\Model\MarketplaceId',
        'skus' => 'string[]',
        'asins' => 'string[]',
        'eligibilities' => '\SellingPartnerApi\Model\EligibilityStatus[]',
        'preferences' => '\SellingPartnerApi\Model\Preference',
        'promotions' => '\SellingPartnerApi\Model\Promotion',
        'program_types' => '\SellingPartnerApi\Model\ProgramTypes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
        'skus' => null,
        'asins' => null,
        'eligibilities' => null,
        'preferences' => null,
        'promotions' => null,
        'program_types' => null
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
        'marketplace_id' => 'marketplaceId',
        'skus' => 'skus',
        'asins' => 'asins',
        'eligibilities' => 'eligibilities',
        'preferences' => 'preferences',
        'promotions' => 'promotions',
        'program_types' => 'programTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'skus' => 'setSkus',
        'asins' => 'setAsins',
        'eligibilities' => 'setEligibilities',
        'preferences' => 'setPreferences',
        'promotions' => 'setPromotions',
        'program_types' => 'setProgramTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'skus' => 'getSkus',
        'asins' => 'getAsins',
        'eligibilities' => 'getEligibilities',
        'preferences' => 'getPreferences',
        'promotions' => 'getPromotions',
        'program_types' => 'getProgramTypes'
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
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['skus'] = isset($data['skus']) ? $data['skus'] : null;
        $this->container['asins'] = isset($data['asins']) ? $data['asins'] : null;
        $this->container['eligibilities'] = isset($data['eligibilities']) ? $data['eligibilities'] : null;
        $this->container['preferences'] = isset($data['preferences']) ? $data['preferences'] : null;
        $this->container['promotions'] = isset($data['promotions']) ? $data['promotions'] : null;
        $this->container['program_types'] = isset($data['program_types']) ? $data['program_types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['program_types'] === null) {
            $invalidProperties[] = "'program_types' can't be null";
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
     * Gets marketplace_id
     *
     * @return \SellingPartnerApi\Model\MarketplaceId
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param \SellingPartnerApi\Model\MarketplaceId $marketplace_id The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL.  Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets skus
     *
     * @return string[]
     */
    public function getSkus()
    {
        return $this->container['skus'];
    }

    /**
     * Sets skus
     *
     * @param string[] $skus A list of SKUs to filter. This filter is only supported for sellers and not for vendors.
     *
     * @return $this
     */
    public function setSkus($skus)
    {
        $this->container['skus'] = $skus;

        return $this;
    }

    /**
     * Gets asins
     *
     * @return string[]
     */
    public function getAsins()
    {
        return $this->container['asins'];
    }

    /**
     * Sets asins
     *
     * @param string[] $asins A list of Amazon Standard Identification Numbers (ASINs).
     *
     * @return $this
     */
    public function setAsins($asins)
    {
        $this->container['asins'] = $asins;

        return $this;
    }

    /**
     * Gets eligibilities
     *
     * @return \SellingPartnerApi\Model\EligibilityStatus[]
     */
    public function getEligibilities()
    {
        return $this->container['eligibilities'];
    }

    /**
     * Sets eligibilities
     *
     * @param \SellingPartnerApi\Model\EligibilityStatus[] $eligibilities A list of eligibilities associated with an offer.
     *
     * @return $this
     */
    public function setEligibilities($eligibilities)
    {
        $this->container['eligibilities'] = $eligibilities;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return \SellingPartnerApi\Model\Preference
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param \SellingPartnerApi\Model\Preference $preferences Offer preferences to include in the result filter criteria.
     *
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \SellingPartnerApi\Model\Promotion
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \SellingPartnerApi\Model\Promotion $promotions Offer promotions to include in the result filter criteria.
     *
     * @return $this
     */
    public function setPromotions($promotions)
    {
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets program_types
     *
     * @return \SellingPartnerApi\Model\ProgramTypes
     */
    public function getProgramTypes()
    {
        return $this->container['program_types'];
    }

    /**
     * Sets program_types
     *
     * @param \SellingPartnerApi\Model\ProgramTypes $program_types program_types
     *
     * @return $this
     */
    public function setProgramTypes($program_types)
    {
        $this->container['program_types'] = $program_types;

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

