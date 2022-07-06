# ItemVoucher

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_type** | **string** |  | 
**eligible_amount** | **int** | Applies only to CONECS type vouchers: maximum amount eligible at the item level. | [optional] 
**actual_amount** | **int** | Amount actually paid by the buyer. This is set by the API when processing the IPN request. | [optional] 
**is_selected** | **bool** | Only one contract type (e.g. CONECS, CVCONNECT, etc.) is applicable at the order level. The contract with the highest cumulated amount is automatically selected by the API at execution time. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


