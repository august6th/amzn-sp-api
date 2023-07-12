<?php
/**
 * CapacityType
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
 *
 * OpenAPI spec version: v1
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
 * CapacityType Class Doc Comment
 *
 * @category Class
 * @description Type of capacity
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CapacityType
{
    /**
     * Possible values of this enum
     */
    const SCHEDULED_CAPACITY = 'SCHEDULED_CAPACITY';
    const AVAILABLE_CAPACITY = 'AVAILABLE_CAPACITY';
    const ENCUMBERED_CAPACITY = 'ENCUMBERED_CAPACITY';
    const RESERVED_CAPACITY = 'RESERVED_CAPACITY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SCHEDULED_CAPACITY,
            self::AVAILABLE_CAPACITY,
            self::ENCUMBERED_CAPACITY,
            self::RESERVED_CAPACITY,
        ];
    }
}


