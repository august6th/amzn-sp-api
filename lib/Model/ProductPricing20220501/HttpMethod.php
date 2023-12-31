<?php
/**
 * HttpMethod
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
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products.  For more information, see the [Product Pricing v2022-05-01 Use Case Guide](doc:product-pricing-api-v2022-05-01-use-case-guide).
 *
 * OpenAPI spec version: 2022-05-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ProductPricing20220501;
use \SellingPartnerApi\ObjectSerializer;

/**
 * HttpMethod Class Doc Comment
 *
 * @category Class
 * @description The HTTP method associated with an individual request within a batch.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HttpMethod
{
    /**
     * Possible values of this enum
     */
    const GET = 'GET';
const PUT = 'PUT';
const PATCH = 'PATCH';
const DELETE = 'DELETE';
const POST = 'POST';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GET,
self::PUT,
self::PATCH,
self::DELETE,
self::POST,        ];
    }
}
