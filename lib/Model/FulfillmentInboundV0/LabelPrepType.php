<?php
/**
 * LabelPrepType
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
use \SellingPartnerApi\ObjectSerializer;

/**
 * LabelPrepType Class Doc Comment
 *
 * @category Class
 * @description The type of label preparation that is required for the inbound shipment.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelPrepType
{
    /**
     * Possible values of this enum
     */
    const NO_LABEL = 'NO_LABEL';
const SELLER_LABEL = 'SELLER_LABEL';
const AMAZON_LABEL = 'AMAZON_LABEL';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_LABEL,
self::SELLER_LABEL,
self::AMAZON_LABEL,        ];
    }
}
