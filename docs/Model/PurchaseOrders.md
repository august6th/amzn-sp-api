# PurchaseOrders

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | Purchase order numbers involved in this shipment, list all the PO that are involved as part of this shipment. | [optional] 
**purchase_order_date** | [**\DateTime**](\DateTime.md) | Purchase order numbers involved in this shipment, list all the PO that are involved as part of this shipment. | [optional] 
**ship_window** | **string** | Date range in which shipment is expected for these purchase orders. | [optional] 
**items** | [**\SellingPartnerApi\Model\PurchaseOrderItems[]**](PurchaseOrderItems.md) | A list of the items that are associated to the PO in this transport and their associated details. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

