# SellingPartnerApi\OffersApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listOfferMetrics**](OffersApi.md#listOfferMetrics) | **POST** /replenishment/2022-11-07/offers/metrics/search | 
[**listOffers**](OffersApi.md#listOffers) | **POST** /replenishment/2022-11-07/offers/search | 


# **listOfferMetrics**
> \SellingPartnerApi\Model\ListOfferMetricsResponse listOfferMetrics($body)



Returns aggregated replenishment program metrics for a selling partner's offers.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SellingPartnerApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SellingPartnerApi\Model\ListOfferMetricsRequest(); // \SellingPartnerApi\Model\ListOfferMetricsRequest | The request body for the `listOfferMetrics` operation.

try {
    $result = $apiInstance->listOfferMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->listOfferMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ListOfferMetricsRequest**](../Model/ListOfferMetricsRequest.md)| The request body for the &#x60;listOfferMetrics&#x60; operation. | [optional]

### Return type

[**\SellingPartnerApi\Model\ListOfferMetricsResponse**](../Model/ListOfferMetricsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOffers**
> \SellingPartnerApi\Model\ListOffersResponse listOffers($body)



Returns the details of a selling partner's replenishment program offers. Note that this operation only supports sellers at this time.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SellingPartnerApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SellingPartnerApi\Model\ListOffersRequest(); // \SellingPartnerApi\Model\ListOffersRequest | 

try {
    $result = $apiInstance->listOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->listOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\ListOffersRequest**](../Model/ListOffersRequest.md)|  | [optional]

### Return type

[**\SellingPartnerApi\Model\ListOffersResponse**](../Model/ListOffersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
