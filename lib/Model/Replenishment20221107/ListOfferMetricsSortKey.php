<?php
/**
 * ListOfferMetricsSortKey
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery (automatic or manual) of any replenishable item at a frequency chosen by the customer.
 *
 * OpenAPI spec version: 2022-11-07
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\Replenishment20221107;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ListOfferMetricsSortKey Class Doc Comment
 *
 * @category Class
 * @description The attribute to use to sort the results.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListOfferMetricsSortKey
{
    /**
     * Possible values of this enum
     */
    const SHIPPED_SUBSCRIPTION_UNITS = 'SHIPPED_SUBSCRIPTION_UNITS';
const TOTAL_SUBSCRIPTIONS_REVENUE = 'TOTAL_SUBSCRIPTIONS_REVENUE';
const ACTIVE_SUBSCRIPTIONS = 'ACTIVE_SUBSCRIPTIONS';
const NEXT_90_DAYS_SHIPPED_SUBSCRIPTION_UNITS = 'NEXT_90DAYS_SHIPPED_SUBSCRIPTION_UNITS';
const NEXT_60_DAYS_SHIPPED_SUBSCRIPTION_UNITS = 'NEXT_60DAYS_SHIPPED_SUBSCRIPTION_UNITS';
const NEXT_30_DAYS_SHIPPED_SUBSCRIPTION_UNITS = 'NEXT_30DAYS_SHIPPED_SUBSCRIPTION_UNITS';
const NEXT_90_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE = 'NEXT_90DAYS_TOTAL_SUBSCRIPTIONS_REVENUE';
const NEXT_60_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE = 'NEXT_60DAYS_TOTAL_SUBSCRIPTIONS_REVENUE';
const NEXT_30_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE = 'NEXT_30DAYS_TOTAL_SUBSCRIPTIONS_REVENUE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPPED_SUBSCRIPTION_UNITS,
self::TOTAL_SUBSCRIPTIONS_REVENUE,
self::ACTIVE_SUBSCRIPTIONS,
self::NEXT_90_DAYS_SHIPPED_SUBSCRIPTION_UNITS,
self::NEXT_60_DAYS_SHIPPED_SUBSCRIPTION_UNITS,
self::NEXT_30_DAYS_SHIPPED_SUBSCRIPTION_UNITS,
self::NEXT_90_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE,
self::NEXT_60_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE,
self::NEXT_30_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE,        ];
    }
}
