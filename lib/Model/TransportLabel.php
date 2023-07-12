<?php
/**
 * TransportLabel
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
 * TransportLabel Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransportLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'transportLabel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label_create_date_time' => 'string',
        'shipment_information' => '\SellingPartnerApi\Model\ShipmentInformation',
        'label_data' => '\SellingPartnerApi\Model\LabelData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label_create_date_time' => null,
        'shipment_information' => null,
        'label_data' => null
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
        'label_create_date_time' => 'labelCreateDateTime',
        'shipment_information' => 'shipmentInformation',
        'label_data' => 'labelData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_create_date_time' => 'setLabelCreateDateTime',
        'shipment_information' => 'setShipmentInformation',
        'label_data' => 'setLabelData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_create_date_time' => 'getLabelCreateDateTime',
        'shipment_information' => 'getShipmentInformation',
        'label_data' => 'getLabelData'
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
        $this->container['label_create_date_time'] = isset($data['label_create_date_time']) ? $data['label_create_date_time'] : null;
        $this->container['shipment_information'] = isset($data['shipment_information']) ? $data['shipment_information'] : null;
        $this->container['label_data'] = isset($data['label_data']) ? $data['label_data'] : null;
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
     * Gets label_create_date_time
     *
     * @return string
     */
    public function getLabelCreateDateTime()
    {
        return $this->container['label_create_date_time'];
    }

    /**
     * Sets label_create_date_time
     *
     * @param string $label_create_date_time Date on which label is created.
     *
     * @return $this
     */
    public function setLabelCreateDateTime($label_create_date_time)
    {
        $this->container['label_create_date_time'] = $label_create_date_time;

        return $this;
    }

    /**
     * Gets shipment_information
     *
     * @return \SellingPartnerApi\Model\ShipmentInformation
     */
    public function getShipmentInformation()
    {
        return $this->container['shipment_information'];
    }

    /**
     * Sets shipment_information
     *
     * @param \SellingPartnerApi\Model\ShipmentInformation $shipment_information Indicates the shipment Information details like warehouse and business reference details like ARN, Selling Party detail and Vendor Warehouse details
     *
     * @return $this
     */
    public function setShipmentInformation($shipment_information)
    {
        $this->container['shipment_information'] = $shipment_information;

        return $this;
    }

    /**
     * Gets label_data
     *
     * @return \SellingPartnerApi\Model\LabelData[]
     */
    public function getLabelData()
    {
        return $this->container['label_data'];
    }

    /**
     * Sets label_data
     *
     * @param \SellingPartnerApi\Model\LabelData[] $label_data Indicates the label data,format and type associated .
     *
     * @return $this
     */
    public function setLabelData($label_data)
    {
        $this->container['label_data'] = $label_data;

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

