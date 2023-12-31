<?php
/**
 * BarcodeInstruction
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
 * BarcodeInstruction Class Doc Comment
 *
 * @category Class
 * @description Labeling requirements for the item. For more information about FBA labeling requirements, see the Seller Central Help for your marketplace.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BarcodeInstruction
{
    /**
     * Possible values of this enum
     */
    const REQUIRES_FNSKU_LABEL = 'RequiresFNSKULabel';
const CAN_USE_ORIGINAL_BARCODE = 'CanUseOriginalBarcode';
const MUST_PROVIDE_SELLER_SKU = 'MustProvideSellerSKU';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REQUIRES_FNSKU_LABEL,
self::CAN_USE_ORIGINAL_BARCODE,
self::MUST_PROVIDE_SELLER_SKU,        ];
    }
}
