<?php
/**
 * ListingsApi
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Listings Restrictions
 *
 * The Selling Partner API for Listings Restrictions provides programmatic access to restrictions on Amazon catalog listings.  For more information, see the [Listings Restrictions API Use Case Guide](doc:listings-restrictions-api-v2021-08-01-use-case-guide).
 *
 * OpenAPI spec version: 2021-08-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SellingPartnerApi\ApiException;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\HeaderSelector;
use SellingPartnerApi\ObjectSerializer;

/**
 * ListingsApi Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getListingsRestrictions
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $seller_id A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $condition_type The condition used to filter restrictions. (optional)
     * @param  string $reason_locale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\RestrictionList
     */
    public function getListingsRestrictions($asin, $seller_id, $marketplace_ids, $condition_type = null, $reason_locale = null)
    {
        list($response) = $this->getListingsRestrictionsWithHttpInfo($asin, $seller_id, $marketplace_ids, $condition_type, $reason_locale);
        return $response;
    }

    /**
     * Operation getListingsRestrictionsWithHttpInfo
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $seller_id A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $condition_type The condition used to filter restrictions. (optional)
     * @param  string $reason_locale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\RestrictionList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListingsRestrictionsWithHttpInfo($asin, $seller_id, $marketplace_ids, $condition_type = null, $reason_locale = null)
    {
        $returnType = '\SellingPartnerApi\Model\RestrictionList';
        $request = $this->getListingsRestrictionsRequest($asin, $seller_id, $marketplace_ids, $condition_type, $reason_locale);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\RestrictionList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getListingsRestrictionsAsync
     *
     * 
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $seller_id A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $condition_type The condition used to filter restrictions. (optional)
     * @param  string $reason_locale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingsRestrictionsAsync($asin, $seller_id, $marketplace_ids, $condition_type = null, $reason_locale = null)
    {
        return $this->getListingsRestrictionsAsyncWithHttpInfo($asin, $seller_id, $marketplace_ids, $condition_type, $reason_locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListingsRestrictionsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $seller_id A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $condition_type The condition used to filter restrictions. (optional)
     * @param  string $reason_locale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingsRestrictionsAsyncWithHttpInfo($asin, $seller_id, $marketplace_ids, $condition_type = null, $reason_locale = null)
    {
        $returnType = '\SellingPartnerApi\Model\RestrictionList';
        $request = $this->getListingsRestrictionsRequest($asin, $seller_id, $marketplace_ids, $condition_type, $reason_locale);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getListingsRestrictions'
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $seller_id A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $condition_type The condition used to filter restrictions. (optional)
     * @param  string $reason_locale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getListingsRestrictionsRequest($asin, $seller_id, $marketplace_ids, $condition_type = null, $reason_locale = null)
    {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $asin when calling getListingsRestrictions'
            );
        }
        // verify the required parameter 'seller_id' is set
        if ($seller_id === null || (is_array($seller_id) && count($seller_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $seller_id when calling getListingsRestrictions'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getListingsRestrictions'
            );
        }

        $resourcePath = '/listings/2021-08-01/restrictions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($asin !== null) {
            $queryParams['asin'] = ObjectSerializer::toQueryValue($asin);
        }
        // query params
        if ($condition_type !== null) {
            $queryParams['conditionType'] = ObjectSerializer::toQueryValue($condition_type);
        }
        // query params
        if ($seller_id !== null) {
            $queryParams['sellerId'] = ObjectSerializer::toQueryValue($seller_id);
        }
        // query params
        if (is_array($marketplace_ids)) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        } else
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }
        // query params
        if ($reason_locale !== null) {
            $queryParams['reasonLocale'] = ObjectSerializer::toQueryValue($reason_locale);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
