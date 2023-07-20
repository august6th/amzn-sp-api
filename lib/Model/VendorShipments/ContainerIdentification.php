<?php
/**
 * ContainerIdentification
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
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorShipments;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ContainerIdentification Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContainerIdentification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContainerIdentification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'containerIdentificationType' => 'string',
'containerIdentificationNumber' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'containerIdentificationType' => null,
'containerIdentificationNumber' => null    ];

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
        'containerIdentificationType' => 'containerIdentificationType',
'containerIdentificationNumber' => 'containerIdentificationNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'containerIdentificationType' => 'setContainerIdentificationType',
'containerIdentificationNumber' => 'setContainerIdentificationNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'containerIdentificationType' => 'getContainerIdentificationType',
'containerIdentificationNumber' => 'getContainerIdentificationNumber'    ];

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

    const CONTAINER_IDENTIFICATION_TYPE_SSCC = 'SSCC';
const CONTAINER_IDENTIFICATION_TYPE_AMZNCC = 'AMZNCC';
const CONTAINER_IDENTIFICATION_TYPE_GTIN = 'GTIN';
const CONTAINER_IDENTIFICATION_TYPE_BPS = 'BPS';
const CONTAINER_IDENTIFICATION_TYPE_CID = 'CID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContainerIdentificationTypeAllowableValues()
    {
        return [
            self::CONTAINER_IDENTIFICATION_TYPE_SSCC,
self::CONTAINER_IDENTIFICATION_TYPE_AMZNCC,
self::CONTAINER_IDENTIFICATION_TYPE_GTIN,
self::CONTAINER_IDENTIFICATION_TYPE_BPS,
self::CONTAINER_IDENTIFICATION_TYPE_CID,        ];
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
        $this->container['containerIdentificationType'] = isset($data['containerIdentificationType']) ? $data['containerIdentificationType'] : null;
        $this->container['containerIdentificationNumber'] = isset($data['containerIdentificationNumber']) ? $data['containerIdentificationNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['containerIdentificationType'] === null) {
            $invalidProperties[] = "'containerIdentificationType' can't be null";
        }
        $allowedValues = $this->getContainerIdentificationTypeAllowableValues();
        if (!is_null($this->container['containerIdentificationType']) && !in_array($this->container['containerIdentificationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'containerIdentificationType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['containerIdentificationNumber'] === null) {
            $invalidProperties[] = "'containerIdentificationNumber' can't be null";
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
     * Gets containerIdentificationType
     *
     * @return string
     */
    public function getContainerIdentificationType()
    {
        return $this->container['containerIdentificationType'];
    }

    /**
     * Sets containerIdentificationType
     *
     * @param string $containerIdentificationType The container identification type.
     *
     * @return $this
     */
    public function setContainerIdentificationType($containerIdentificationType)
    {
        $allowedValues = $this->getContainerIdentificationTypeAllowableValues();
        if (!in_array($containerIdentificationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'containerIdentificationType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['containerIdentificationType'] = $containerIdentificationType;

        return $this;
    }

    /**
     * Gets containerIdentificationNumber
     *
     * @return string
     */
    public function getContainerIdentificationNumber()
    {
        return $this->container['containerIdentificationNumber'];
    }

    /**
     * Sets containerIdentificationNumber
     *
     * @param string $containerIdentificationNumber Container identification number that adheres to the definition of the container identification type.
     *
     * @return $this
     */
    public function setContainerIdentificationNumber($containerIdentificationNumber)
    {
        $this->container['containerIdentificationNumber'] = $containerIdentificationNumber;

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