# ItemSerializer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Unique identifier. This field is automatically generated. | [optional] 
**href** | **string** | Url of the resource. This field is automatically generated. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date. This field is automatically generated. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date of the last modification. This field is automatically generated. | [optional] 
**seller** | **string** | uuid of the related seller. You may use seller_external_ref instead. | [optional] 
**seller_external_ref** | **string** | External reference of the seller. | [optional] 
**order** | **string** | uuid of the order. | [optional] 
**reference** | **string** | Reference of the item. | 
**description** | **string** | Description of the item. | 
**type** | **string** | Type of item (eg. ENTERTAINMENT, SPORT, etc.). | [optional] 
**amount** | **int** | Total amount (price) of the item. | 
**quantity** | **int** | Quantity of items ordered. This field is for information only and has no effect on the amount of the order. | [optional] 
**is_commission** | **bool** | If set to true, this item represents a commission owed to the marketplace. | [optional] 
**commission_amount** | **int** | Commission amount related to this item and included in the total amount. A non-null value is incompatible with is_commission &#x3D; True. | [optional] 
**status** | **string** | Current status of the item. | [optional] 
**hold_payment** | **bool** | If true, the cashout to the corresponding seller will be hold until this item is activated. | [optional] 
**transfers** | [**\Swagger\Client\Model\Transfer[]**](Transfer.md) |  | [optional] 
**vouchers** | [**\Swagger\Client\Model\ItemVoucher[]**](ItemVoucher.md) |  | [optional] 
**links** | [**\Swagger\Client\Model\ItemLinks**](ItemLinks.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


