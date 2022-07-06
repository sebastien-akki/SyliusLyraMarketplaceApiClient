# Registration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Unique identifier. This field is automatically generated. | [optional] 
**seller** | **string** |  | [optional] 
**href** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date. This field is automatically generated. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date of the last modification. This field is automatically generated. | [optional] 
**marketplace** | **string** | Uuid of the marketplace. | 
**name** | **string** | Company name (name of the company as indicated on the KBIS). | 
**person_type** | **string** | Seller&#39;s type, either natural person (&#39;PP&#39;) or legal entity (&#39;PM&#39;). Default is &#39;PM&#39;. | 
**title** | **string** | Seller&#39;s title, if a natural person. | [optional] 
**first_name** | **string** | Seller&#39;s first_name, if a natural person. | [optional] 
**last_name** | **string** | Seller&#39;s last name, if a natural person. | [optional] 
**trading_name** | **string** | Seller&#39;s trading name, if it is a legal entity. | [optional] 
**nature** | **string** | Company name (name of the company as indicated on the KBIS). | [optional] 
**reference** | **string** | WARNING: this field will be read-only as it returns the seller reference (e.g. \&quot;SL012345\&quot;) as soon as the registration has been created. | [optional] 
**description** | **string** | Description of the seller. | 
**iban** | **string** | Iban of the seller. Applicable only if the marketplace supports only one currency. Otherwise the &#39;ibans&#39; property must be set instead. | [optional] 
**status** | **string** | Current status of the registration. | [optional] 
**legal_form** | **int** | Legal form of the seller. See documentation. | [optional] 
**economic_agent** | **string** | Economic agent ISO code. | [optional] 
**vat_number** | **string** | VAT number. When the seller is not subject to VAT, indicate the VAT number of the Marketplace. | 
**cashout_delay** | **int** | Delay between the capture of a transaction and the cashout to the seller. | [optional] 
**external_ref** | **string** | Your ID of the seller. This allows you to avoid having to use the seller uuid when ordering. | [optional] 
**turnover** | **int** | Expected turnover, expressed in the smallest existing monetary unit (e.g. cents). | [optional] 
**address** | [**\Swagger\Client\Model\Address**](Address.md) |  | [optional] 
**board** | [**\Swagger\Client\Model\BoardMember[]**](BoardMember.md) |  | 
**activities** | [**\Swagger\Client\Model\Activity[]**](Activity.md) |  | 
**ibans** | [**\Swagger\Client\Model\RegistrationIBAN[]**](RegistrationIBAN.md) | List of ibans associated with their currencies. | [optional] 
**vouchers** | [**\Swagger\Client\Model\RegistrationVoucher[]**](RegistrationVoucher.md) | Eligible vouchers with their contract numbers. | [optional] 
**links** | [**\Swagger\Client\Model\RegistrationLinks**](RegistrationLinks.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


