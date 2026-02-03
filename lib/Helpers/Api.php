<?php

namespace SellingPartnerApi\Helpers;

class Api
{
    /**
     * @param $name
     * @return string
     */
    public static function findClassByName($name)
    {
        $dirname = ucfirst(rtrim($name, 'Api'));
        $classname = ucfirst($name);
        $class = "\SellingPartnerApi\Api\\$dirname\\$classname";
        if (class_exists($class)) {
            return $class;
        }

        $map = self::getClassNameMap();
        if (empty($map[$classname])) {
            throw new \RuntimeException("api $name not exists");
        }

        return $map[$classname];
    }

    /**
     * @return array
     */
    private static function getClassNameMap()
    {
        return [
            'AplusContent20201101Api' => '\SellingPartnerApi\Api\AplusContent20201101\AplusContentApi',
            'AppIntegrations20240401Api' => '\SellingPartnerApi\Api\AppIntegrations20240401\AppIntegrationsApi',
            'Applications20231130Api' => '\SellingPartnerApi\Api\Application20231130\ApplicationsApi',
            'Awd20240509Api' => '\SellingPartnerApi\Api\Awd20240509\AwdApi',
            'Catalog20201201Api' => '\SellingPartnerApi\Api\CatalogItems20201201\CatalogApi',
            'Catalog20220401Api' => '\SellingPartnerApi\Api\CatalogItems20220401\CatalogApi',
            'CatalogV0Api' => '\SellingPartnerApi\Api\CatalogItemsV0\CatalogApi',
            'CustomerFeedback20240601Api' => '\SellingPartnerApi\Api\CustomerFeedback20240601\CustomerFeedbackApi',
            'DataKiosk20231115QueriesApi' => '\SellingPartnerApi\Api\DataKiosk20231115\QueriesApi',
            'DefinitionsProductType20200901Api' => '\SellingPartnerApi\Api\DefinitionsProductTypes20200901\DefinitionsApi',
            'DeliveryShipmentInvoice20220701Api' => '\SellingPartnerApi\Api\DeliveryShipmentInvoiceV20220701\DeliveryShipmentInvoiceApi',
            'EasyShip20220323Api' => '\SellingPartnerApi\Api\EasyShip20220323\EasyShipApi',
            'ExternalFulfillmentInventory20240911Api' => '\SellingPartnerApi\Api\ExternalFulfillmentInventory20240911\BatchInventoryApi',
            'ExternalFulfillmentReturns20240911Api' => '\SellingPartnerApi\Api\ExternalFulfillmentReturns20240911\ReturnRetrievalApi',
            'ExternalFulfillmentShipmentProcessing20240911Api' => '\SellingPartnerApi\Api\ExternalFulfillmentShipments20240911\ShipmentProcessingApi',
            'ExternalFulfillmentShipmentRetrieval20240911Api' => '\SellingPartnerApi\Api\ExternalFulfillmentShipments20240911\ShipmentRetrievalApi',
            'Feeds20210630Api' => '\SellingPartnerApi\Api\Feeds20210630\FeedsApi',
            'Finance20240619Api' => '\SellingPartnerApi\Api\Finances20240619\DefaultApi',
            'FinancesV0Api' => '\SellingPartnerApi\Api\FinancesV0\DefaultApi',
            'FbaInbound20240320Api' => '\SellingPartnerApi\Api\FulfillmentInbound20240320\FbaInboundApi',
            'FbaInboundV0Api' => '\SellingPartnerApi\Api\FulfillmentInboundV0\FbaInboundApi',
            'FbaOutbound20200701Api' => '\SellingPartnerApi\Api\FulfillmentOutbound20200701\FbaOutboundApi',
            'Invoices20240619Api' => '\SellingPartnerApi\Api\InvoicesApiModel20240619\InvoicesApi',
            'Listings20200901Api' => '\SellingPartnerApi\Api\ListingsItems20200901\ListingsApi',
            'Listings20210801Api' => '\SellingPartnerApi\Api\ListingsItems20210801\ListingsApi',
            'ListingsRestrictions20210801Api' => '\SellingPartnerApi\Api\ListingsRestrictions20210801\ListingsApi',
            'MerchantFulfillmentV0Api' => '\SellingPartnerApi\Api\MerchantFulfillmentV0\MerchantFulfillmentApi',
            'GetOrder20260101Api' => '\SellingPartnerApi\Api\Orders20260101\GetOrderApi',
            'SearchOrders20260101Api' => '\SellingPartnerApi\Api\Orders20260101\SearchOrdersApi',
            'ShipmentApi' => '\SellingPartnerApi\Api\OrdersV0\ShipmentApi',
            'ProductFeesV0Api' => '\SellingPartnerApi\Api\ProductFeesV0\FeesApi',
            'ProductPricing20220501Api' => '\SellingPartnerApi\Api\ProductPricing20220501\ProductPricingApi',
            'ProductPricingV0Api' => '\SellingPartnerApi\Api\ProductPricingV0\ProductPricingApi',
            'ReplenishmentOffers20221107Api' => '\SellingPartnerApi\Api\Replenishment20221107\OffersApi',
            'ReplenishmentSellingpartners20221107Api' => '\SellingPartnerApi\Api\Replenishment20221107\SellingpartnersApi',
            'Reports20210630Api' => '\SellingPartnerApi\Api\Reports20210630\ReportsApi',
            'SellerWalletAccount20240301' => '\SellingPartnerApi\Api\SellerWallet20240301\AccountsApi',
            'SellerWalletTransaction20240301' => '\SellingPartnerApi\Api\SellerWallet20240301\TransactionsApi',
            'SellerWalletTransferPreview20240301' => '\SellingPartnerApi\Api\SellerWallet20240301\TransferPreviewApi',
            'SellerWalletTransferSchedule20240301' => '\SellingPartnerApi\Api\SellerWallet20240301\TransferScheduleApi',
            'ShipmentInvoicingV0Api' => '\SellingPartnerApi\Api\ShipmentInvoicingV0\ShipmentInvoiceApi',
            'ShippingV2Api' => '\SellingPartnerApi\Api\ShippingV2\ShippingApi',
            'SupplySources20200701Api' => '\SellingPartnerApi\Api\SupplySources20200701\SupplySourcesApi',
            'Tokens20210301Api' => '\SellingPartnerApi\Api\Tokens20210301\TokensApi',
            'Transfers20240601' => '\SellingPartnerApi\Api\Transfers20240601\DefaultApi',
            'Uploads20201101Api' => '\SellingPartnerApi\Api\Uploads20201101\UploadsApi',
            'VehiclesAutomotive20241101Api' => '\SellingPartnerApi\Api\Vehicles20241101\AutomotiveApi',
            'Vehicles20241101Api' => '\SellingPartnerApi\Api\Vehicles20241101\VehiclesApi',
            'VendorDFInventoryV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentInventoryV1\UpdateInventoryApi',
            'VendorDFOrders20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentOrders20211228\VendorOrdersApi',
            'VendorDFOrdersV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentOrdersV1\VendorOrdersApi',
            'VendorDFInvoiceV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentPaymentsV1\VendorInvoiceApi',
            'VendorDFSandboxApi' => '\SellingPartnerApi\Api\VendorDirectFulfillmentSandboxData20211028\VendorDFSandboxApi',
            'VendorDFSandboxtransactionstatusApi' => '\SellingPartnerApi\Api\VendorDirectFulfillmentSandboxData20211028\VendorDFSandboxtransactionstatusApi',
            'VendorDFCreateContainerLabel20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\CreateContainerLabelApi',
            'VendorDFCustomerInvoices20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\CustomerInvoicesApi',
            'VendorDFShipping20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\VendorShippingApi',
            'VendorDFShippingLabels20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\VendorShippingLabelsApi',
            'VendorDFCustomerInvoicesV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShippingV1\CustomerInvoicesApi',
            'VendorDFShippingV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShippingV1\VendorShippingApi',
            'VendorDFShippingLabelsV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShippingV1\VendorShippingLabelsApi',
            'VendorDFTransaction20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentTransactions20211228\VendorTransactionApi',
            'VendorDFTransactionV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentTransactionsV1\VendorTransactionApi',
            'VendorInvoicePaymentsApi' => '\SellingPartnerApi\Api\VendorInvoices\VendorPaymentsApi',
            'VendorShipmentShippingApi' => '\SellingPartnerApi\Api\VendorShipments\VendorShippingApi',
            'VendorTransactionStatusApi' => '\SellingPartnerApi\Api\VendorTransactionStatus\VendorTransactionApi',
        ];
    }
}