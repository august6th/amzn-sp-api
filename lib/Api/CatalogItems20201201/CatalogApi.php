<?php
/**
 * CatalogApi
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, see the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2020-12-01-use-case-guide).
 *
 * OpenAPI spec version: 2020-12-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Api\CatalogItems20201201;

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
 * CatalogApi Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogApi
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
     * Operation getCatalogItem
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\CatalogItems20201201\Item
     */
    public function getCatalogItem($asin, $marketplaceIds, $includedData = null, $locale = null)
    {
        list($response) = $this->getCatalogItemWithHttpInfo($asin, $marketplaceIds, $includedData, $locale);
        return $response;
    }

    /**
     * Operation getCatalogItemWithHttpInfo
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\CatalogItems20201201\Item, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCatalogItemWithHttpInfo($asin, $marketplaceIds, $includedData = null, $locale = null)
    {
        $returnType = '\SellingPartnerApi\Model\CatalogItems20201201\Item';
        $request = $this->getCatalogItemRequest($asin, $marketplaceIds, $includedData, $locale);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\SellingPartnerApi\Model\CatalogItems20201201\Item',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCatalogItemAsync
     *
     * 
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCatalogItemAsync($asin, $marketplaceIds, $includedData = null, $locale = null)
    {
        return $this->getCatalogItemAsyncWithHttpInfo($asin, $marketplaceIds, $includedData, $locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCatalogItemAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCatalogItemAsyncWithHttpInfo($asin, $marketplaceIds, $includedData = null, $locale = null)
    {
        $returnType = '\SellingPartnerApi\Model\CatalogItems20201201\Item';
        $request = $this->getCatalogItemRequest($asin, $marketplaceIds, $includedData, $locale);

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
     * Create request for operation 'getCatalogItem'
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCatalogItemRequest($asin, $marketplaceIds, $includedData = null, $locale = null)
    {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $asin when calling getCatalogItem'
            );
        }
        // verify the required parameter 'marketplaceIds' is set
        if ($marketplaceIds === null || (is_array($marketplaceIds) && count($marketplaceIds) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplaceIds when calling getCatalogItem'
            );
        }

        $resourcePath = '/catalog/2020-12-01/items/{asin}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplaceIds)) {
            $marketplaceIds = ObjectSerializer::serializeCollection($marketplaceIds, 'csv', true);
        }
        if ($marketplaceIds !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplaceIds, null);
        }
        // query params
        if (is_array($includedData)) {
            $includedData = ObjectSerializer::serializeCollection($includedData, 'csv', true);
        }
        if ($includedData !== null) {
            $queryParams['includedData'] = ObjectSerializer::toQueryValue($includedData, null);
        }
        // query params
        if ($locale !== null) {
            $queryParams['locale'] = ObjectSerializer::toQueryValue($locale, null);
        }

        // path params
        if ($asin !== null) {
            $resourcePath = str_replace(
                '{' . 'asin' . '}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
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
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
     * Operation searchCatalogItems
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brandNames A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classificationIds A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $pageSize Number of results to be returned per page. (optional, default to 10)
     * @param  string $pageToken A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywordsLocale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\CatalogItems20201201\ItemSearchResults
     */
    public function searchCatalogItems($keywords, $marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = '10', $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        list($response) = $this->searchCatalogItemsWithHttpInfo($keywords, $marketplaceIds, $includedData, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale, $locale);
        return $response;
    }

    /**
     * Operation searchCatalogItemsWithHttpInfo
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brandNames A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classificationIds A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $pageSize Number of results to be returned per page. (optional, default to 10)
     * @param  string $pageToken A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywordsLocale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\CatalogItems20201201\ItemSearchResults, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchCatalogItemsWithHttpInfo($keywords, $marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = '10', $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        $returnType = '\SellingPartnerApi\Model\CatalogItems20201201\ItemSearchResults';
        $request = $this->searchCatalogItemsRequest($keywords, $marketplaceIds, $includedData, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale, $locale);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\SellingPartnerApi\Model\CatalogItems20201201\ItemSearchResults',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\CatalogItems20201201\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchCatalogItemsAsync
     *
     * 
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brandNames A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classificationIds A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $pageSize Number of results to be returned per page. (optional, default to 10)
     * @param  string $pageToken A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywordsLocale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCatalogItemsAsync($keywords, $marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = '10', $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        return $this->searchCatalogItemsAsyncWithHttpInfo($keywords, $marketplaceIds, $includedData, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale, $locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchCatalogItemsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brandNames A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classificationIds A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $pageSize Number of results to be returned per page. (optional, default to 10)
     * @param  string $pageToken A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywordsLocale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCatalogItemsAsyncWithHttpInfo($keywords, $marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = '10', $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        $returnType = '\SellingPartnerApi\Model\CatalogItems20201201\ItemSearchResults';
        $request = $this->searchCatalogItemsRequest($keywords, $marketplaceIds, $includedData, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale, $locale);

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
     * Create request for operation 'searchCatalogItems'
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $includedData A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brandNames A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classificationIds A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $pageSize Number of results to be returned per page. (optional, default to 10)
     * @param  string $pageToken A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywordsLocale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchCatalogItemsRequest($keywords, $marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = '10', $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        // verify the required parameter 'keywords' is set
        if ($keywords === null || (is_array($keywords) && count($keywords) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $keywords when calling searchCatalogItems'
            );
        }
        // verify the required parameter 'marketplaceIds' is set
        if ($marketplaceIds === null || (is_array($marketplaceIds) && count($marketplaceIds) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplaceIds when calling searchCatalogItems'
            );
        }

        $resourcePath = '/catalog/2020-12-01/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($keywords)) {
            $keywords = ObjectSerializer::serializeCollection($keywords, 'csv', true);
        }
        if ($keywords !== null) {
            $queryParams['keywords'] = ObjectSerializer::toQueryValue($keywords, null);
        }
        // query params
        if (is_array($marketplaceIds)) {
            $marketplaceIds = ObjectSerializer::serializeCollection($marketplaceIds, 'csv', true);
        }
        if ($marketplaceIds !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplaceIds, null);
        }
        // query params
        if (is_array($includedData)) {
            $includedData = ObjectSerializer::serializeCollection($includedData, 'csv', true);
        }
        if ($includedData !== null) {
            $queryParams['includedData'] = ObjectSerializer::toQueryValue($includedData, null);
        }
        // query params
        if (is_array($brandNames)) {
            $brandNames = ObjectSerializer::serializeCollection($brandNames, 'csv', true);
        }
        if ($brandNames !== null) {
            $queryParams['brandNames'] = ObjectSerializer::toQueryValue($brandNames, null);
        }
        // query params
        if (is_array($classificationIds)) {
            $classificationIds = ObjectSerializer::serializeCollection($classificationIds, 'csv', true);
        }
        if ($classificationIds !== null) {
            $queryParams['classificationIds'] = ObjectSerializer::toQueryValue($classificationIds, null);
        }
        // query params
        if ($pageSize !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($pageSize, null);
        }
        // query params
        if ($pageToken !== null) {
            $queryParams['pageToken'] = ObjectSerializer::toQueryValue($pageToken, null);
        }
        // query params
        if ($keywordsLocale !== null) {
            $queryParams['keywordsLocale'] = ObjectSerializer::toQueryValue($keywordsLocale, null);
        }
        // query params
        if ($locale !== null) {
            $queryParams['locale'] = ObjectSerializer::toQueryValue($locale, null);
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
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
