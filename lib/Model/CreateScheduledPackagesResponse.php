<?php
/**
 * CreateScheduledPackagesResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.  Your Easy Ship applications can:  * Get available time slots for packages to be scheduled for delivery.  * Schedule, reschedule, and cancel Easy Ship orders.  * Print labels, invoices, and warranties.  See the [Marketplace Support Table](doc:easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * OpenAPI spec version: 2022-03-23
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
 * CreateScheduledPackagesResponse Class Doc Comment
 *
 * @category Class
 * @description The response schema for the bulk scheduling API. It returns by the bulk scheduling API containing an array of the scheduled packtages, an optional list of orders we couldn&#39;t schedule with the reason, and a pre-signed URL for a ZIP file containing the associated shipping labels plus the documents enabled for your marketplace.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateScheduledPackagesResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateScheduledPackagesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scheduled_packages' => '\SellingPartnerApi\Model\Package[]',
        'rejected_orders' => '\SellingPartnerApi\Model\RejectedOrder[]',
        'printable_documents_url' => '\SellingPartnerApi\Model\URL'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scheduled_packages' => null,
        'rejected_orders' => null,
        'printable_documents_url' => null
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
        'scheduled_packages' => 'scheduledPackages',
        'rejected_orders' => 'rejectedOrders',
        'printable_documents_url' => 'printableDocumentsUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scheduled_packages' => 'setScheduledPackages',
        'rejected_orders' => 'setRejectedOrders',
        'printable_documents_url' => 'setPrintableDocumentsUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scheduled_packages' => 'getScheduledPackages',
        'rejected_orders' => 'getRejectedOrders',
        'printable_documents_url' => 'getPrintableDocumentsUrl'
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
        $this->container['scheduled_packages'] = isset($data['scheduled_packages']) ? $data['scheduled_packages'] : null;
        $this->container['rejected_orders'] = isset($data['rejected_orders']) ? $data['rejected_orders'] : null;
        $this->container['printable_documents_url'] = isset($data['printable_documents_url']) ? $data['printable_documents_url'] : null;
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
     * Gets scheduled_packages
     *
     * @return \SellingPartnerApi\Model\Package[]
     */
    public function getScheduledPackages()
    {
        return $this->container['scheduled_packages'];
    }

    /**
     * Sets scheduled_packages
     *
     * @param \SellingPartnerApi\Model\Package[] $scheduled_packages A list of packages. Refer to the `Package` object.
     *
     * @return $this
     */
    public function setScheduledPackages($scheduled_packages)
    {
        $this->container['scheduled_packages'] = $scheduled_packages;

        return $this;
    }

    /**
     * Gets rejected_orders
     *
     * @return \SellingPartnerApi\Model\RejectedOrder[]
     */
    public function getRejectedOrders()
    {
        return $this->container['rejected_orders'];
    }

    /**
     * Sets rejected_orders
     *
     * @param \SellingPartnerApi\Model\RejectedOrder[] $rejected_orders A list of orders we couldn't scheduled on your behalf. Each element contains the reason and details on the error.
     *
     * @return $this
     */
    public function setRejectedOrders($rejected_orders)
    {
        $this->container['rejected_orders'] = $rejected_orders;

        return $this;
    }

    /**
     * Gets printable_documents_url
     *
     * @return \SellingPartnerApi\Model\URL
     */
    public function getPrintableDocumentsUrl()
    {
        return $this->container['printable_documents_url'];
    }

    /**
     * Sets printable_documents_url
     *
     * @param \SellingPartnerApi\Model\URL $printable_documents_url printable_documents_url
     *
     * @return $this
     */
    public function setPrintableDocumentsUrl($printable_documents_url)
    {
        $this->container['printable_documents_url'] = $printable_documents_url;

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


