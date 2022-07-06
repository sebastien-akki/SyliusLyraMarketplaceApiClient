# OrderRegister

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Unique identifier. This field is automatically generated. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date. This field is automatically generated. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date of the last modification. This field is automatically generated. | [optional] 
**marketplace** | **string** |  | 
**buyer** | [**\Swagger\Client\Model\Buyer**](Buyer.md) |  | 
**language** | **string** | If no language is defined, the payment page will be displayed according to the user&#39;s browser default settings. | [optional] 
**url_return** | **string** | Default URL to which the customer is redirected after the payment process. | [optional] 
**status** | **string** |  | [optional] 
**alias** | **string** |  | [optional] 
**alias_to_update** | **string** |  | [optional] 
**payment_url** | **string** | URL address of the Payzen payment Form. | [optional] 
**currency** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


