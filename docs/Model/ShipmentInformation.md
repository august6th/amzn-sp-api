# ShipmentInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor_details** | [**\SellingPartnerApi\Model\VendorDetails**](VendorDetails.md) | Vendor Details requesting for Shipment Label | [optional] 
**buyer_reference_number** | **string** | Buyer Reference number which is a unique number. | [optional] 
**ship_to_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name/Address of the destination warehouse where the shipment is being shipped to. | [optional] 
**ship_from_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name/Address of the destination warehouse where the shipment is being shipped to. | [optional] 
**warehouse_id** | **string** | Vendor Warehouse ID from where the shipment is scheduled to be picked up by buyer / Carrier. | [optional] 
**master_tracking_id** | **string** | Unique Id with  which  the shipment can be tracked for Small Parcels. | [optional] 
**total_label_count** | **int** | Number of Labels that are created as part of this shipment. | [optional] 
**ship_mode** | **string** | Type of shipment whether it is Small Parcel | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

