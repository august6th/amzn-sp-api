<?php
/**
 * BoxContentsSource
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
 * BoxContentsSource Class Doc Comment
 *
 * @category Class
 * @description Where the seller provided box contents information for a shipment.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BoxContentsSource
{
    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
const FEED = 'FEED';
const _2_D_BARCODE = '2D_BARCODE';
const INTERACTIVE = 'INTERACTIVE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
self::FEED,
self::_2_D_BARCODE,
self::INTERACTIVE,        ];
    }
}
