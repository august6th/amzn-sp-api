<?php
/**
 * ContentBadge
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * OpenAPI spec version: 2020-11-01
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
use \SellingPartnerApi\ObjectSerializer;

/**
 * ContentBadge Class Doc Comment
 *
 * @category Class
 * @description A flag that provides additional information about an A+ Content document.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentBadge
{
    /**
     * Possible values of this enum
     */
    const BULK = 'BULK';
    const GENERATED = 'GENERATED';
    const LAUNCHPAD = 'LAUNCHPAD';
    const PREMIUM = 'PREMIUM';
    const STANDARD = 'STANDARD';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BULK,
            self::GENERATED,
            self::LAUNCHPAD,
            self::PREMIUM,
            self::STANDARD,
        ];
    }
}


