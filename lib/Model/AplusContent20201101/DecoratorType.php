<?php
/**
 * DecoratorType
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
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContent20201101;
use \SellingPartnerApi\ObjectSerializer;

/**
 * DecoratorType Class Doc Comment
 *
 * @category Class
 * @description The type of rich text decorator.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DecoratorType
{
    /**
     * Possible values of this enum
     */
    const LIST_ITEM = 'LIST_ITEM';
const LIST_ORDERED = 'LIST_ORDERED';
const LIST_UNORDERED = 'LIST_UNORDERED';
const STYLE_BOLD = 'STYLE_BOLD';
const STYLE_ITALIC = 'STYLE_ITALIC';
const STYLE_LINEBREAK = 'STYLE_LINEBREAK';
const STYLE_PARAGRAPH = 'STYLE_PARAGRAPH';
const STYLE_UNDERLINE = 'STYLE_UNDERLINE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIST_ITEM,
self::LIST_ORDERED,
self::LIST_UNORDERED,
self::STYLE_BOLD,
self::STYLE_ITALIC,
self::STYLE_LINEBREAK,
self::STYLE_PARAGRAPH,
self::STYLE_UNDERLINE,        ];
    }
}
