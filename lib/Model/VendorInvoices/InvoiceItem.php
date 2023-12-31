<?php
/**
 * InvoiceItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Payments
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
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

namespace SellingPartnerApi\Model\VendorInvoices;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * InvoiceItem Class Doc Comment
 *
 * @category Class
 * @description Details of the item being invoiced.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemSequenceNumber' => 'int',
'amazonProductIdentifier' => 'string',
'vendorProductIdentifier' => 'string',
'invoicedQuantity' => '\SellingPartnerApi\Model\VendorInvoices\ItemQuantity',
'netCost' => '\SellingPartnerApi\Model\VendorInvoices\Money',
'purchaseOrderNumber' => 'string',
'hsnCode' => 'string',
'creditNoteDetails' => '\SellingPartnerApi\Model\VendorInvoices\CreditNoteDetails',
'taxDetails' => '\SellingPartnerApi\Model\VendorInvoices\TaxDetails[]',
'chargeDetails' => '\SellingPartnerApi\Model\VendorInvoices\ChargeDetails[]',
'allowanceDetails' => '\SellingPartnerApi\Model\VendorInvoices\AllowanceDetails[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemSequenceNumber' => null,
'amazonProductIdentifier' => null,
'vendorProductIdentifier' => null,
'invoicedQuantity' => null,
'netCost' => null,
'purchaseOrderNumber' => null,
'hsnCode' => null,
'creditNoteDetails' => null,
'taxDetails' => null,
'chargeDetails' => null,
'allowanceDetails' => null    ];

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
        'itemSequenceNumber' => 'itemSequenceNumber',
'amazonProductIdentifier' => 'amazonProductIdentifier',
'vendorProductIdentifier' => 'vendorProductIdentifier',
'invoicedQuantity' => 'invoicedQuantity',
'netCost' => 'netCost',
'purchaseOrderNumber' => 'purchaseOrderNumber',
'hsnCode' => 'hsnCode',
'creditNoteDetails' => 'creditNoteDetails',
'taxDetails' => 'taxDetails',
'chargeDetails' => 'chargeDetails',
'allowanceDetails' => 'allowanceDetails'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemSequenceNumber' => 'setItemSequenceNumber',
'amazonProductIdentifier' => 'setAmazonProductIdentifier',
'vendorProductIdentifier' => 'setVendorProductIdentifier',
'invoicedQuantity' => 'setInvoicedQuantity',
'netCost' => 'setNetCost',
'purchaseOrderNumber' => 'setPurchaseOrderNumber',
'hsnCode' => 'setHsnCode',
'creditNoteDetails' => 'setCreditNoteDetails',
'taxDetails' => 'setTaxDetails',
'chargeDetails' => 'setChargeDetails',
'allowanceDetails' => 'setAllowanceDetails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemSequenceNumber' => 'getItemSequenceNumber',
'amazonProductIdentifier' => 'getAmazonProductIdentifier',
'vendorProductIdentifier' => 'getVendorProductIdentifier',
'invoicedQuantity' => 'getInvoicedQuantity',
'netCost' => 'getNetCost',
'purchaseOrderNumber' => 'getPurchaseOrderNumber',
'hsnCode' => 'getHsnCode',
'creditNoteDetails' => 'getCreditNoteDetails',
'taxDetails' => 'getTaxDetails',
'chargeDetails' => 'getChargeDetails',
'allowanceDetails' => 'getAllowanceDetails'    ];

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
        $this->container['itemSequenceNumber'] = isset($data['itemSequenceNumber']) ? $data['itemSequenceNumber'] : null;
        $this->container['amazonProductIdentifier'] = isset($data['amazonProductIdentifier']) ? $data['amazonProductIdentifier'] : null;
        $this->container['vendorProductIdentifier'] = isset($data['vendorProductIdentifier']) ? $data['vendorProductIdentifier'] : null;
        $this->container['invoicedQuantity'] = isset($data['invoicedQuantity']) ? $data['invoicedQuantity'] : null;
        $this->container['netCost'] = isset($data['netCost']) ? $data['netCost'] : null;
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['hsnCode'] = isset($data['hsnCode']) ? $data['hsnCode'] : null;
        $this->container['creditNoteDetails'] = isset($data['creditNoteDetails']) ? $data['creditNoteDetails'] : null;
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
        $this->container['chargeDetails'] = isset($data['chargeDetails']) ? $data['chargeDetails'] : null;
        $this->container['allowanceDetails'] = isset($data['allowanceDetails']) ? $data['allowanceDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemSequenceNumber'] === null) {
            $invalidProperties[] = "'itemSequenceNumber' can't be null";
        }
        if ($this->container['invoicedQuantity'] === null) {
            $invalidProperties[] = "'invoicedQuantity' can't be null";
        }
        if ($this->container['netCost'] === null) {
            $invalidProperties[] = "'netCost' can't be null";
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
     * Gets itemSequenceNumber
     *
     * @return int
     */
    public function getItemSequenceNumber()
    {
        return $this->container['itemSequenceNumber'];
    }

    /**
     * Sets itemSequenceNumber
     *
     * @param int $itemSequenceNumber Unique number related to this line item.
     *
     * @return $this
     */
    public function setItemSequenceNumber($itemSequenceNumber)
    {
        $this->container['itemSequenceNumber'] = $itemSequenceNumber;

        return $this;
    }

    /**
     * Gets amazonProductIdentifier
     *
     * @return string
     */
    public function getAmazonProductIdentifier()
    {
        return $this->container['amazonProductIdentifier'];
    }

    /**
     * Sets amazonProductIdentifier
     *
     * @param string $amazonProductIdentifier Amazon Standard Identification Number (ASIN) of an item.
     *
     * @return $this
     */
    public function setAmazonProductIdentifier($amazonProductIdentifier)
    {
        $this->container['amazonProductIdentifier'] = $amazonProductIdentifier;

        return $this;
    }

    /**
     * Gets vendorProductIdentifier
     *
     * @return string
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendorProductIdentifier'];
    }

    /**
     * Sets vendorProductIdentifier
     *
     * @param string $vendorProductIdentifier The vendor selected product identifier of the item. Should be the same as was provided in the purchase order.
     *
     * @return $this
     */
    public function setVendorProductIdentifier($vendorProductIdentifier)
    {
        $this->container['vendorProductIdentifier'] = $vendorProductIdentifier;

        return $this;
    }

    /**
     * Gets invoicedQuantity
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\ItemQuantity
     */
    public function getInvoicedQuantity()
    {
        return $this->container['invoicedQuantity'];
    }

    /**
     * Sets invoicedQuantity
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\ItemQuantity $invoicedQuantity invoicedQuantity
     *
     * @return $this
     */
    public function setInvoicedQuantity($invoicedQuantity)
    {
        $this->container['invoicedQuantity'] = $invoicedQuantity;

        return $this;
    }

    /**
     * Gets netCost
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\Money
     */
    public function getNetCost()
    {
        return $this->container['netCost'];
    }

    /**
     * Sets netCost
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\Money $netCost netCost
     *
     * @return $this
     */
    public function setNetCost($netCost)
    {
        $this->container['netCost'] = $netCost;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string $purchaseOrderNumber The Amazon purchase order number for this invoiced line item. Formatting Notes: 8-character alpha-numeric code. This value is mandatory only when invoiceType is Invoice, and is not required when invoiceType is CreditNote.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets hsnCode
     *
     * @return string
     */
    public function getHsnCode()
    {
        return $this->container['hsnCode'];
    }

    /**
     * Sets hsnCode
     *
     * @param string $hsnCode HSN Tax code. The HSN number cannot contain alphabets.
     *
     * @return $this
     */
    public function setHsnCode($hsnCode)
    {
        $this->container['hsnCode'] = $hsnCode;

        return $this;
    }

    /**
     * Gets creditNoteDetails
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\CreditNoteDetails
     */
    public function getCreditNoteDetails()
    {
        return $this->container['creditNoteDetails'];
    }

    /**
     * Sets creditNoteDetails
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\CreditNoteDetails $creditNoteDetails creditNoteDetails
     *
     * @return $this
     */
    public function setCreditNoteDetails($creditNoteDetails)
    {
        $this->container['creditNoteDetails'] = $creditNoteDetails;

        return $this;
    }

    /**
     * Gets taxDetails
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\TaxDetails[]
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\TaxDetails[] $taxDetails Individual tax details per line item.
     *
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets chargeDetails
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\ChargeDetails[]
     */
    public function getChargeDetails()
    {
        return $this->container['chargeDetails'];
    }

    /**
     * Sets chargeDetails
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\ChargeDetails[] $chargeDetails Individual charge details per line item.
     *
     * @return $this
     */
    public function setChargeDetails($chargeDetails)
    {
        $this->container['chargeDetails'] = $chargeDetails;

        return $this;
    }

    /**
     * Gets allowanceDetails
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\AllowanceDetails[]
     */
    public function getAllowanceDetails()
    {
        return $this->container['allowanceDetails'];
    }

    /**
     * Sets allowanceDetails
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\AllowanceDetails[] $allowanceDetails Individual allowance details per line item.
     *
     * @return $this
     */
    public function setAllowanceDetails($allowanceDetails)
    {
        $this->container['allowanceDetails'] = $allowanceDetails;

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
