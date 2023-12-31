<?php
/**
 * TransportDetailInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FulfillmentInboundV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * TransportDetailInput Class Doc Comment
 *
 * @category Class
 * @description Information required to create an Amazon-partnered carrier shipping estimate, or to alert the Amazon fulfillment center to the arrival of an inbound shipment by a non-Amazon-partnered carrier.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransportDetailInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransportDetailInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'partneredSmallParcelData' => '\SellingPartnerApi\Model\FulfillmentInboundV0\PartneredSmallParcelDataInput',
'nonPartneredSmallParcelData' => '\SellingPartnerApi\Model\FulfillmentInboundV0\NonPartneredSmallParcelDataInput',
'partneredLtlData' => '\SellingPartnerApi\Model\FulfillmentInboundV0\PartneredLtlDataInput',
'nonPartneredLtlData' => '\SellingPartnerApi\Model\FulfillmentInboundV0\NonPartneredLtlDataInput'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'partneredSmallParcelData' => null,
'nonPartneredSmallParcelData' => null,
'partneredLtlData' => null,
'nonPartneredLtlData' => null    ];

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
        'partneredSmallParcelData' => 'PartneredSmallParcelData',
'nonPartneredSmallParcelData' => 'NonPartneredSmallParcelData',
'partneredLtlData' => 'PartneredLtlData',
'nonPartneredLtlData' => 'NonPartneredLtlData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partneredSmallParcelData' => 'setPartneredSmallParcelData',
'nonPartneredSmallParcelData' => 'setNonPartneredSmallParcelData',
'partneredLtlData' => 'setPartneredLtlData',
'nonPartneredLtlData' => 'setNonPartneredLtlData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partneredSmallParcelData' => 'getPartneredSmallParcelData',
'nonPartneredSmallParcelData' => 'getNonPartneredSmallParcelData',
'partneredLtlData' => 'getPartneredLtlData',
'nonPartneredLtlData' => 'getNonPartneredLtlData'    ];

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
        $this->container['partneredSmallParcelData'] = isset($data['partneredSmallParcelData']) ? $data['partneredSmallParcelData'] : null;
        $this->container['nonPartneredSmallParcelData'] = isset($data['nonPartneredSmallParcelData']) ? $data['nonPartneredSmallParcelData'] : null;
        $this->container['partneredLtlData'] = isset($data['partneredLtlData']) ? $data['partneredLtlData'] : null;
        $this->container['nonPartneredLtlData'] = isset($data['nonPartneredLtlData']) ? $data['nonPartneredLtlData'] : null;
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
     * Gets partneredSmallParcelData
     *
     * @return \SellingPartnerApi\Model\FulfillmentInboundV0\PartneredSmallParcelDataInput
     */
    public function getPartneredSmallParcelData()
    {
        return $this->container['partneredSmallParcelData'];
    }

    /**
     * Sets partneredSmallParcelData
     *
     * @param \SellingPartnerApi\Model\FulfillmentInboundV0\PartneredSmallParcelDataInput $partneredSmallParcelData partneredSmallParcelData
     *
     * @return $this
     */
    public function setPartneredSmallParcelData($partneredSmallParcelData)
    {
        $this->container['partneredSmallParcelData'] = $partneredSmallParcelData;

        return $this;
    }

    /**
     * Gets nonPartneredSmallParcelData
     *
     * @return \SellingPartnerApi\Model\FulfillmentInboundV0\NonPartneredSmallParcelDataInput
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->container['nonPartneredSmallParcelData'];
    }

    /**
     * Sets nonPartneredSmallParcelData
     *
     * @param \SellingPartnerApi\Model\FulfillmentInboundV0\NonPartneredSmallParcelDataInput $nonPartneredSmallParcelData nonPartneredSmallParcelData
     *
     * @return $this
     */
    public function setNonPartneredSmallParcelData($nonPartneredSmallParcelData)
    {
        $this->container['nonPartneredSmallParcelData'] = $nonPartneredSmallParcelData;

        return $this;
    }

    /**
     * Gets partneredLtlData
     *
     * @return \SellingPartnerApi\Model\FulfillmentInboundV0\PartneredLtlDataInput
     */
    public function getPartneredLtlData()
    {
        return $this->container['partneredLtlData'];
    }

    /**
     * Sets partneredLtlData
     *
     * @param \SellingPartnerApi\Model\FulfillmentInboundV0\PartneredLtlDataInput $partneredLtlData partneredLtlData
     *
     * @return $this
     */
    public function setPartneredLtlData($partneredLtlData)
    {
        $this->container['partneredLtlData'] = $partneredLtlData;

        return $this;
    }

    /**
     * Gets nonPartneredLtlData
     *
     * @return \SellingPartnerApi\Model\FulfillmentInboundV0\NonPartneredLtlDataInput
     */
    public function getNonPartneredLtlData()
    {
        return $this->container['nonPartneredLtlData'];
    }

    /**
     * Sets nonPartneredLtlData
     *
     * @param \SellingPartnerApi\Model\FulfillmentInboundV0\NonPartneredLtlDataInput $nonPartneredLtlData nonPartneredLtlData
     *
     * @return $this
     */
    public function setNonPartneredLtlData($nonPartneredLtlData)
    {
        $this->container['nonPartneredLtlData'] = $nonPartneredLtlData;

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
