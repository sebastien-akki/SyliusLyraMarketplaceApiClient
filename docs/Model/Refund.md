# Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Unique identifier. This field is automatically generated. | [optional] 
**href** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date. This field is automatically generated. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date of the last modification. This field is automatically generated. | [optional] 
**order** | **string** | Uuid of the related order. | [optional] 
**transaction** | **string** | Uuid of the related transaction. | [optional] 
**reference** | **string** | Reference of the refund. | 
**description** | **string** | Description | [optional] 
**amount** | **int** |  | [optional] 
**currency** | **string** | Currency of the refund transaction. | 
**status** | **string** |  | [optional] 
**items** | [**\Swagger\Client\Model\RefundItem[]**](RefundItem.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


