# RegistrationDocument

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Unique identifier. This field is automatically generated. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date. This field is automatically generated. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date of the last modification. This field is automatically generated. | [optional] 
**registration** | **string** | Uuid of the related registration to which the document must be added. | [optional] 
**board_member** | **string** | Uuid of the related board member related to the document. This field is mandatory when uploading an identity or an address type of document. | [optional] 
**type** | **string** | Type of the document. | 
**reference** | **string** | Reference of the document. | 
**description** | **string** | Optional description of the document. | [optional] 
**file** | **string** | Document. | [optional] 
**additional_data** | **string** | Additional data. Use this field to set the IBAN if you upload an IBAN. | [optional] 
**status** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


