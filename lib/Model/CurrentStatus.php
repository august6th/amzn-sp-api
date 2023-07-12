<?php
/**
 * CurrentStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
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
 * CurrentStatus Class Doc Comment
 *
 * @category Class
 * @description The current delivery status of the package.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrentStatus
{
    /**
     * Possible values of this enum
     */
    const IN_TRANSIT = 'IN_TRANSIT';
    const DELIVERED = 'DELIVERED';
    const RETURNING = 'RETURNING';
    const RETURNED = 'RETURNED';
    const UNDELIVERABLE = 'UNDELIVERABLE';
    const DELAYED = 'DELAYED';
    const AVAILABLE_FOR_PICKUP = 'AVAILABLE_FOR_PICKUP';
    const CUSTOMER_ACTION = 'CUSTOMER_ACTION';
    const UNKNOWN = 'UNKNOWN';
    const OUT_FOR_DELIVERY = 'OUT_FOR_DELIVERY';
    const DELIVERY_ATTEMPTED = 'DELIVERY_ATTEMPTED';
    const PICKUP_SUCCESSFUL = 'PICKUP_SUCCESSFUL';
    const PICKUP_CANCELLED = 'PICKUP_CANCELLED';
    const PICKUP_ATTEMPTED = 'PICKUP_ATTEMPTED';
    const PICKUP_SCHEDULED = 'PICKUP_SCHEDULED';
    const RETURN_REQUEST_ACCEPTED = 'RETURN_REQUEST_ACCEPTED';
    const REFUND_ISSUED = 'REFUND_ISSUED';
    const RETURN_RECEIVED_IN_FC = 'RETURN_RECEIVED_IN_FC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_TRANSIT,
            self::DELIVERED,
            self::RETURNING,
            self::RETURNED,
            self::UNDELIVERABLE,
            self::DELAYED,
            self::AVAILABLE_FOR_PICKUP,
            self::CUSTOMER_ACTION,
            self::UNKNOWN,
            self::OUT_FOR_DELIVERY,
            self::DELIVERY_ATTEMPTED,
            self::PICKUP_SUCCESSFUL,
            self::PICKUP_CANCELLED,
            self::PICKUP_ATTEMPTED,
            self::PICKUP_SCHEDULED,
            self::RETURN_REQUEST_ACCEPTED,
            self::REFUND_ISSUED,
            self::RETURN_RECEIVED_IN_FC,
        ];
    }
}


