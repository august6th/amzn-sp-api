<?php
/**
 * GetRatesRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\Shipping;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * GetRatesRequest Class Doc Comment
 *
 * @category Class
 * @description The payload schema for the getRates operation.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetRatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetRatesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipTo' => '\SellingPartnerApi\Model\Shipping\Address',
'shipFrom' => '\SellingPartnerApi\Model\Shipping\Address',
'serviceTypes' => '\SellingPartnerApi\Model\Shipping\ServiceTypeList',
'shipDate' => '\DateTime',
'containerSpecifications' => '\SellingPartnerApi\Model\Shipping\ContainerSpecificationList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipTo' => null,
'shipFrom' => null,
'serviceTypes' => null,
'shipDate' => 'date-time',
'containerSpecifications' => null    ];

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
        'shipTo' => 'shipTo',
'shipFrom' => 'shipFrom',
'serviceTypes' => 'serviceTypes',
'shipDate' => 'shipDate',
'containerSpecifications' => 'containerSpecifications'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipTo' => 'setShipTo',
'shipFrom' => 'setShipFrom',
'serviceTypes' => 'setServiceTypes',
'shipDate' => 'setShipDate',
'containerSpecifications' => 'setContainerSpecifications'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipTo' => 'getShipTo',
'shipFrom' => 'getShipFrom',
'serviceTypes' => 'getServiceTypes',
'shipDate' => 'getShipDate',
'containerSpecifications' => 'getContainerSpecifications'    ];

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
        $this->container['shipTo'] = isset($data['shipTo']) ? $data['shipTo'] : null;
        $this->container['shipFrom'] = isset($data['shipFrom']) ? $data['shipFrom'] : null;
        $this->container['serviceTypes'] = isset($data['serviceTypes']) ? $data['serviceTypes'] : null;
        $this->container['shipDate'] = isset($data['shipDate']) ? $data['shipDate'] : null;
        $this->container['containerSpecifications'] = isset($data['containerSpecifications']) ? $data['containerSpecifications'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipTo'] === null) {
            $invalidProperties[] = "'shipTo' can't be null";
        }
        if ($this->container['shipFrom'] === null) {
            $invalidProperties[] = "'shipFrom' can't be null";
        }
        if ($this->container['serviceTypes'] === null) {
            $invalidProperties[] = "'serviceTypes' can't be null";
        }
        if ($this->container['containerSpecifications'] === null) {
            $invalidProperties[] = "'containerSpecifications' can't be null";
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
     * Gets shipTo
     *
     * @return \SellingPartnerApi\Model\Shipping\Address
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     *
     * @param \SellingPartnerApi\Model\Shipping\Address $shipTo shipTo
     *
     * @return $this
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

        return $this;
    }

    /**
     * Gets shipFrom
     *
     * @return \SellingPartnerApi\Model\Shipping\Address
     */
    public function getShipFrom()
    {
        return $this->container['shipFrom'];
    }

    /**
     * Sets shipFrom
     *
     * @param \SellingPartnerApi\Model\Shipping\Address $shipFrom shipFrom
     *
     * @return $this
     */
    public function setShipFrom($shipFrom)
    {
        $this->container['shipFrom'] = $shipFrom;

        return $this;
    }

    /**
     * Gets serviceTypes
     *
     * @return \SellingPartnerApi\Model\Shipping\ServiceTypeList
     */
    public function getServiceTypes()
    {
        return $this->container['serviceTypes'];
    }

    /**
     * Sets serviceTypes
     *
     * @param \SellingPartnerApi\Model\Shipping\ServiceTypeList $serviceTypes serviceTypes
     *
     * @return $this
     */
    public function setServiceTypes($serviceTypes)
    {
        $this->container['serviceTypes'] = $serviceTypes;

        return $this;
    }

    /**
     * Gets shipDate
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->container['shipDate'];
    }

    /**
     * Sets shipDate
     *
     * @param \DateTime $shipDate The start date and time. This defaults to the current date and time.
     *
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->container['shipDate'] = $shipDate;

        return $this;
    }

    /**
     * Gets containerSpecifications
     *
     * @return \SellingPartnerApi\Model\Shipping\ContainerSpecificationList
     */
    public function getContainerSpecifications()
    {
        return $this->container['containerSpecifications'];
    }

    /**
     * Sets containerSpecifications
     *
     * @param \SellingPartnerApi\Model\Shipping\ContainerSpecificationList $containerSpecifications containerSpecifications
     *
     * @return $this
     */
    public function setContainerSpecifications($containerSpecifications)
    {
        $this->container['containerSpecifications'] = $containerSpecifications;

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
