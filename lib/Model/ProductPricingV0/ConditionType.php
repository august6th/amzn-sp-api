<?php
/**
 * ConditionType
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace SellingPartnerApi\Model\ProductPricingV0;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ConditionType Class Doc Comment
 *
 * @category Class
 * @description Indicates the condition of the item. Possible values: New, Used, Collectible, Refurbished, Club.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConditionType
{
    /**
     * Possible values of this enum
     */
    const _NEW = 'New';
const USED = 'Used';
const COLLECTIBLE = 'Collectible';
const REFURBISHED = 'Refurbished';
const CLUB = 'Club';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
self::USED,
self::COLLECTIBLE,
self::REFURBISHED,
self::CLUB,        ];
    }
}
