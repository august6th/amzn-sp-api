<?php
/**
 * OrderItemAcknowledgement
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace SellingPartnerApi\Model\VendorOrders;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * OrderItemAcknowledgement Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItemAcknowledgement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItemAcknowledgement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acknowledgementCode' => 'string',
'acknowledgedQuantity' => '\SellingPartnerApi\Model\VendorOrders\ItemQuantity',
'scheduledShipDate' => '\DateTime',
'scheduledDeliveryDate' => '\DateTime',
'rejectionReason' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acknowledgementCode' => null,
'acknowledgedQuantity' => null,
'scheduledShipDate' => 'date-time',
'scheduledDeliveryDate' => 'date-time',
'rejectionReason' => null    ];

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
        'acknowledgementCode' => 'acknowledgementCode',
'acknowledgedQuantity' => 'acknowledgedQuantity',
'scheduledShipDate' => 'scheduledShipDate',
'scheduledDeliveryDate' => 'scheduledDeliveryDate',
'rejectionReason' => 'rejectionReason'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acknowledgementCode' => 'setAcknowledgementCode',
'acknowledgedQuantity' => 'setAcknowledgedQuantity',
'scheduledShipDate' => 'setScheduledShipDate',
'scheduledDeliveryDate' => 'setScheduledDeliveryDate',
'rejectionReason' => 'setRejectionReason'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acknowledgementCode' => 'getAcknowledgementCode',
'acknowledgedQuantity' => 'getAcknowledgedQuantity',
'scheduledShipDate' => 'getScheduledShipDate',
'scheduledDeliveryDate' => 'getScheduledDeliveryDate',
'rejectionReason' => 'getRejectionReason'    ];

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

    const ACKNOWLEDGEMENT_CODE_ACCEPTED = 'Accepted';
const ACKNOWLEDGEMENT_CODE_BACKORDERED = 'Backordered';
const ACKNOWLEDGEMENT_CODE_REJECTED = 'Rejected';
const REJECTION_REASON_TEMPORARILY_UNAVAILABLE = 'TemporarilyUnavailable';
const REJECTION_REASON_INVALID_PRODUCT_IDENTIFIER = 'InvalidProductIdentifier';
const REJECTION_REASON_OBSOLETE_PRODUCT = 'ObsoleteProduct';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcknowledgementCodeAllowableValues()
    {
        return [
            self::ACKNOWLEDGEMENT_CODE_ACCEPTED,
self::ACKNOWLEDGEMENT_CODE_BACKORDERED,
self::ACKNOWLEDGEMENT_CODE_REJECTED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRejectionReasonAllowableValues()
    {
        return [
            self::REJECTION_REASON_TEMPORARILY_UNAVAILABLE,
self::REJECTION_REASON_INVALID_PRODUCT_IDENTIFIER,
self::REJECTION_REASON_OBSOLETE_PRODUCT,        ];
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
        $this->container['acknowledgementCode'] = isset($data['acknowledgementCode']) ? $data['acknowledgementCode'] : null;
        $this->container['acknowledgedQuantity'] = isset($data['acknowledgedQuantity']) ? $data['acknowledgedQuantity'] : null;
        $this->container['scheduledShipDate'] = isset($data['scheduledShipDate']) ? $data['scheduledShipDate'] : null;
        $this->container['scheduledDeliveryDate'] = isset($data['scheduledDeliveryDate']) ? $data['scheduledDeliveryDate'] : null;
        $this->container['rejectionReason'] = isset($data['rejectionReason']) ? $data['rejectionReason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['acknowledgementCode'] === null) {
            $invalidProperties[] = "'acknowledgementCode' can't be null";
        }
        $allowedValues = $this->getAcknowledgementCodeAllowableValues();
        if (!is_null($this->container['acknowledgementCode']) && !in_array($this->container['acknowledgementCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'acknowledgementCode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['acknowledgedQuantity'] === null) {
            $invalidProperties[] = "'acknowledgedQuantity' can't be null";
        }
        $allowedValues = $this->getRejectionReasonAllowableValues();
        if (!is_null($this->container['rejectionReason']) && !in_array($this->container['rejectionReason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rejectionReason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets acknowledgementCode
     *
     * @return string
     */
    public function getAcknowledgementCode()
    {
        return $this->container['acknowledgementCode'];
    }

    /**
     * Sets acknowledgementCode
     *
     * @param string $acknowledgementCode This indicates the acknowledgement code.
     *
     * @return $this
     */
    public function setAcknowledgementCode($acknowledgementCode)
    {
        $allowedValues = $this->getAcknowledgementCodeAllowableValues();
        if (!in_array($acknowledgementCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'acknowledgementCode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['acknowledgementCode'] = $acknowledgementCode;

        return $this;
    }

    /**
     * Gets acknowledgedQuantity
     *
     * @return \SellingPartnerApi\Model\VendorOrders\ItemQuantity
     */
    public function getAcknowledgedQuantity()
    {
        return $this->container['acknowledgedQuantity'];
    }

    /**
     * Sets acknowledgedQuantity
     *
     * @param \SellingPartnerApi\Model\VendorOrders\ItemQuantity $acknowledgedQuantity acknowledgedQuantity
     *
     * @return $this
     */
    public function setAcknowledgedQuantity($acknowledgedQuantity)
    {
        $this->container['acknowledgedQuantity'] = $acknowledgedQuantity;

        return $this;
    }

    /**
     * Gets scheduledShipDate
     *
     * @return \DateTime
     */
    public function getScheduledShipDate()
    {
        return $this->container['scheduledShipDate'];
    }

    /**
     * Sets scheduledShipDate
     *
     * @param \DateTime $scheduledShipDate Estimated ship date per line item. Must be in ISO-8601 date/time format.
     *
     * @return $this
     */
    public function setScheduledShipDate($scheduledShipDate)
    {
        $this->container['scheduledShipDate'] = $scheduledShipDate;

        return $this;
    }

    /**
     * Gets scheduledDeliveryDate
     *
     * @return \DateTime
     */
    public function getScheduledDeliveryDate()
    {
        return $this->container['scheduledDeliveryDate'];
    }

    /**
     * Sets scheduledDeliveryDate
     *
     * @param \DateTime $scheduledDeliveryDate Estimated delivery date per line item. Must be in ISO-8601 date/time format.
     *
     * @return $this
     */
    public function setScheduledDeliveryDate($scheduledDeliveryDate)
    {
        $this->container['scheduledDeliveryDate'] = $scheduledDeliveryDate;

        return $this;
    }

    /**
     * Gets rejectionReason
     *
     * @return string
     */
    public function getRejectionReason()
    {
        return $this->container['rejectionReason'];
    }

    /**
     * Sets rejectionReason
     *
     * @param string $rejectionReason Indicates the reason for rejection.
     *
     * @return $this
     */
    public function setRejectionReason($rejectionReason)
    {
        $allowedValues = $this->getRejectionReasonAllowableValues();
        if (!is_null($rejectionReason) && !in_array($rejectionReason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rejectionReason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rejectionReason'] = $rejectionReason;

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
