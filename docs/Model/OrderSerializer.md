# OrderSerializer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Unique identifier. This field is automatically generated. | [optional] 
**href** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date. This field is automatically generated. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date of the last modification. This field is automatically generated. | [optional] 
**marketplace** | **string** | Unique identifier (uuid) of the related marketplace. | 
**reference** | **string** | Marketplace reference of the order. Its uniqueness is enforced when using use the embedded form, and is in any case recommended. | 
**description** | **string** | Marketplace description of the order. | [optional] 
**language** | **string** | If no language is defined, the payment page will be displayed according to the user&#39;s browser default settings. | [optional] 
**alias** | **string** | This field can be used to define the alias in case of a one or zero-clic (MIT) payment. | [optional] 
**awaiting_validation** | **bool** | Creates a payment with manual validation. | [optional] 
**buyer** | [**\Swagger\Client\Model\BuyerSerializerLegacy**](BuyerSerializerLegacy.md) |  | 
**shipping** | [**\Swagger\Client\Model\ShippingSerializerLegacy**](ShippingSerializerLegacy.md) |  | [optional] 
**payment_config** | **string** | Determine if the payment is spread on several transactions. Default is SINGLE. | [optional] 
**amount** | **int** | Total amount of the order, i.e. sum of the amounts of its items. | [optional] 
**initial_amount** | **int** | Total order amount when executed. Updated amounts cannot exceed it. | [optional] 
**currency** | **string** |  | 
**status** | **string** | Current status of the marketplace. | [optional] 
**webhook_result** | **int** | Status code of the marketplace notification. | [optional] 
**url_return** | **string** | Default URL to which the customer is redirected after the payment process. | [optional] 
**url_success** | **string** | URL to which the customer is redirected after the payment process if it was successful. | [optional] 
**url_refused** | **string** | URL to which the customer is redirected after the payment process if it was refused. | [optional] 
**url_cancel** | **string** | URL to which the customer is redirected after the payment process if it was cancelled. | [optional] 
**url_error** | **string** | URL to which the customer is redirected after the payment process if it was in error. | [optional] 
**return_mode** | **string** | Data transmission method used for the return URL. | [optional] 
**shop_url** | **string** | Overrides the shop url field set at the marketplace level. | [optional] 
**links** | [**\Swagger\Client\Model\OrderLinks**](OrderLinks.md) |  | [optional] 
**vads_transaction_id** | **string** |  | [optional] 
**vads_transaction_date** | **string** |  | [optional] 
**expected_capture_date** | **string** | The expected capture may be used to adjust the capture date after the payment. | [optional] 
**capture_delay** | **int** | Number of days between the payment and the capture. Can only be set before the payment. After the payment, the capture delay should be updating using expected_capture_date. The maximum value is defined at the marketplace level (see max_capture_delay, default is 6 days). | [optional] 
**persist_url** | **string** | Persistent payment link, if applicable. | [optional] 
**expiry_date** | [**\DateTime**](\DateTime.md) | Represents the expiry date of the persist token, if exists. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


