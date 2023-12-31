<?php
/**
 * FailedAdhocDisbursementEventList
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * FailedAdhocDisbursementEventList Class Doc Comment
 *
 * @category Class
 * @description Failed ad hoc disbursement event list.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FailedAdhocDisbursementEventList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FailedAdhocDisbursementEventList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fundsTransfersType' => 'string',
'transferId' => 'string',
'disbursementId' => 'string',
'paymentDisbursementType' => 'string',
'status' => 'string',
'transferAmount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
'postedDate' => '\SellingPartnerApi\Model\FinancesV0\\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fundsTransfersType' => null,
'transferId' => null,
'disbursementId' => null,
'paymentDisbursementType' => null,
'status' => null,
'transferAmount' => null,
'postedDate' => null    ];

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
        'fundsTransfersType' => 'FundsTransfersType',
'transferId' => 'TransferId',
'disbursementId' => 'DisbursementId',
'paymentDisbursementType' => 'PaymentDisbursementType',
'status' => 'Status',
'transferAmount' => 'TransferAmount',
'postedDate' => 'PostedDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fundsTransfersType' => 'setFundsTransfersType',
'transferId' => 'setTransferId',
'disbursementId' => 'setDisbursementId',
'paymentDisbursementType' => 'setPaymentDisbursementType',
'status' => 'setStatus',
'transferAmount' => 'setTransferAmount',
'postedDate' => 'setPostedDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fundsTransfersType' => 'getFundsTransfersType',
'transferId' => 'getTransferId',
'disbursementId' => 'getDisbursementId',
'paymentDisbursementType' => 'getPaymentDisbursementType',
'status' => 'getStatus',
'transferAmount' => 'getTransferAmount',
'postedDate' => 'getPostedDate'    ];

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
        $this->container['fundsTransfersType'] = isset($data['fundsTransfersType']) ? $data['fundsTransfersType'] : null;
        $this->container['transferId'] = isset($data['transferId']) ? $data['transferId'] : null;
        $this->container['disbursementId'] = isset($data['disbursementId']) ? $data['disbursementId'] : null;
        $this->container['paymentDisbursementType'] = isset($data['paymentDisbursementType']) ? $data['paymentDisbursementType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transferAmount'] = isset($data['transferAmount']) ? $data['transferAmount'] : null;
        $this->container['postedDate'] = isset($data['postedDate']) ? $data['postedDate'] : null;
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
     * Gets fundsTransfersType
     *
     * @return string
     */
    public function getFundsTransfersType()
    {
        return $this->container['fundsTransfersType'];
    }

    /**
     * Sets fundsTransfersType
     *
     * @param string $fundsTransfersType The type of fund transfer.   Example \"Refund\"
     *
     * @return $this
     */
    public function setFundsTransfersType($fundsTransfersType)
    {
        $this->container['fundsTransfersType'] = $fundsTransfersType;

        return $this;
    }

    /**
     * Gets transferId
     *
     * @return string
     */
    public function getTransferId()
    {
        return $this->container['transferId'];
    }

    /**
     * Sets transferId
     *
     * @param string $transferId The transfer identifier.
     *
     * @return $this
     */
    public function setTransferId($transferId)
    {
        $this->container['transferId'] = $transferId;

        return $this;
    }

    /**
     * Gets disbursementId
     *
     * @return string
     */
    public function getDisbursementId()
    {
        return $this->container['disbursementId'];
    }

    /**
     * Sets disbursementId
     *
     * @param string $disbursementId The disbursement identifier.
     *
     * @return $this
     */
    public function setDisbursementId($disbursementId)
    {
        $this->container['disbursementId'] = $disbursementId;

        return $this;
    }

    /**
     * Gets paymentDisbursementType
     *
     * @return string
     */
    public function getPaymentDisbursementType()
    {
        return $this->container['paymentDisbursementType'];
    }

    /**
     * Sets paymentDisbursementType
     *
     * @param string $paymentDisbursementType The type of payment for disbursement.   Example `CREDIT_CARD`
     *
     * @return $this
     */
    public function setPaymentDisbursementType($paymentDisbursementType)
    {
        $this->container['paymentDisbursementType'] = $paymentDisbursementType;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the failed `AdhocDisbursement`.   Example `HARD_DECLINED`
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transferAmount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency
     */
    public function getTransferAmount()
    {
        return $this->container['transferAmount'];
    }

    /**
     * Sets transferAmount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency $transferAmount transferAmount
     *
     * @return $this
     */
    public function setTransferAmount($transferAmount)
    {
        $this->container['transferAmount'] = $transferAmount;

        return $this;
    }

    /**
     * Gets postedDate
     *
     * @return \SellingPartnerApi\Model\FinancesV0\\DateTime
     */
    public function getPostedDate()
    {
        return $this->container['postedDate'];
    }

    /**
     * Sets postedDate
     *
     * @param \SellingPartnerApi\Model\FinancesV0\\DateTime $postedDate postedDate
     *
     * @return $this
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

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
