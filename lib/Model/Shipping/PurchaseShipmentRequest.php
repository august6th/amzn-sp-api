<?php
/**
 * PurchaseShipmentRequest
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
 * PurchaseShipmentRequest Class Doc Comment
 *
 * @category Class
 * @description The payload schema for the purchaseShipment operation.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseShipmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clientReferenceId' => '\SellingPartnerApi\Model\Shipping\ClientReferenceId',
'shipTo' => '\SellingPartnerApi\Model\Shipping\Address',
'shipFrom' => '\SellingPartnerApi\Model\Shipping\Address',
'shipDate' => '\DateTime',
'serviceType' => '\SellingPartnerApi\Model\Shipping\ServiceType',
'containers' => '\SellingPartnerApi\Model\Shipping\ContainerList',
'labelSpecification' => '\SellingPartnerApi\Model\Shipping\LabelSpecification'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clientReferenceId' => null,
'shipTo' => null,
'shipFrom' => null,
'shipDate' => 'date-time',
'serviceType' => null,
'containers' => null,
'labelSpecification' => null    ];

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
        'clientReferenceId' => 'clientReferenceId',
'shipTo' => 'shipTo',
'shipFrom' => 'shipFrom',
'shipDate' => 'shipDate',
'serviceType' => 'serviceType',
'containers' => 'containers',
'labelSpecification' => 'labelSpecification'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clientReferenceId' => 'setClientReferenceId',
'shipTo' => 'setShipTo',
'shipFrom' => 'setShipFrom',
'shipDate' => 'setShipDate',
'serviceType' => 'setServiceType',
'containers' => 'setContainers',
'labelSpecification' => 'setLabelSpecification'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clientReferenceId' => 'getClientReferenceId',
'shipTo' => 'getShipTo',
'shipFrom' => 'getShipFrom',
'shipDate' => 'getShipDate',
'serviceType' => 'getServiceType',
'containers' => 'getContainers',
'labelSpecification' => 'getLabelSpecification'    ];

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
        $this->container['clientReferenceId'] = isset($data['clientReferenceId']) ? $data['clientReferenceId'] : null;
        $this->container['shipTo'] = isset($data['shipTo']) ? $data['shipTo'] : null;
        $this->container['shipFrom'] = isset($data['shipFrom']) ? $data['shipFrom'] : null;
        $this->container['shipDate'] = isset($data['shipDate']) ? $data['shipDate'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['containers'] = isset($data['containers']) ? $data['containers'] : null;
        $this->container['labelSpecification'] = isset($data['labelSpecification']) ? $data['labelSpecification'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['clientReferenceId'] === null) {
            $invalidProperties[] = "'clientReferenceId' can't be null";
        }
        if ($this->container['shipTo'] === null) {
            $invalidProperties[] = "'shipTo' can't be null";
        }
        if ($this->container['shipFrom'] === null) {
            $invalidProperties[] = "'shipFrom' can't be null";
        }
        if ($this->container['serviceType'] === null) {
            $invalidProperties[] = "'serviceType' can't be null";
        }
        if ($this->container['containers'] === null) {
            $invalidProperties[] = "'containers' can't be null";
        }
        if ($this->container['labelSpecification'] === null) {
            $invalidProperties[] = "'labelSpecification' can't be null";
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
     * Gets clientReferenceId
     *
     * @return \SellingPartnerApi\Model\Shipping\ClientReferenceId
     */
    public function getClientReferenceId()
    {
        return $this->container['clientReferenceId'];
    }

    /**
     * Sets clientReferenceId
     *
     * @param \SellingPartnerApi\Model\Shipping\ClientReferenceId $clientReferenceId clientReferenceId
     *
     * @return $this
     */
    public function setClientReferenceId($clientReferenceId)
    {
        $this->container['clientReferenceId'] = $clientReferenceId;

        return $this;
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
     * Gets serviceType
     *
     * @return \SellingPartnerApi\Model\Shipping\ServiceType
     */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
     * Sets serviceType
     *
     * @param \SellingPartnerApi\Model\Shipping\ServiceType $serviceType serviceType
     *
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;

        return $this;
    }

    /**
     * Gets containers
     *
     * @return \SellingPartnerApi\Model\Shipping\ContainerList
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     *
     * @param \SellingPartnerApi\Model\Shipping\ContainerList $containers containers
     *
     * @return $this
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

        return $this;
    }

    /**
     * Gets labelSpecification
     *
     * @return \SellingPartnerApi\Model\Shipping\LabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->container['labelSpecification'];
    }

    /**
     * Sets labelSpecification
     *
     * @param \SellingPartnerApi\Model\Shipping\LabelSpecification $labelSpecification labelSpecification
     *
     * @return $this
     */
    public function setLabelSpecification($labelSpecification)
    {
        $this->container['labelSpecification'] = $labelSpecification;

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
