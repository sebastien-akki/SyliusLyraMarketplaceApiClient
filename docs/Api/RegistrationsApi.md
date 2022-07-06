# Swagger\Client\RegistrationsApi

All URIs are relative to *https://secure.lyra.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrationsCreate**](RegistrationsApi.md#registrationsCreate) | **POST** /registrations/ | Creates a registration.
[**registrationsDocumentsCreate**](RegistrationsApi.md#registrationsDocumentsCreate) | **POST** /registrations/{registration}/documents | Creates a registration document.
[**registrationsDocumentsList**](RegistrationsApi.md#registrationsDocumentsList) | **GET** /registrations/{registration}/documents | List of documents by registration.
[**registrationsList**](RegistrationsApi.md#registrationsList) | **GET** /registrations/ | Retrieves the list of registrations by marketplace.
[**registrationsRead**](RegistrationsApi.md#registrationsRead) | **GET** /registrations/{uuid} | Retrieves a single registration.
[**registrationsStatus**](RegistrationsApi.md#registrationsStatus) | **GET** /registrations/{uuid}/status | Retrieves the status of a single registration. Deprecated: use registration_read instead.
[**registrationsSubmit**](RegistrationsApi.md#registrationsSubmit) | **POST** /registrations/{uuid}/submit | Submits the registration for examination by our services.
[**registrationsUpdate**](RegistrationsApi.md#registrationsUpdate) | **PUT** /registrations/{uuid} | Updates a registration.


# **registrationsCreate**
> \Swagger\Client\Model\Registration registrationsCreate($data)

Creates a registration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\Registration(); // \Swagger\Client\Model\Registration | 

try {
    $result = $apiInstance->registrationsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->registrationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Registration**](../Model/Registration.md)|  |

### Return type

[**\Swagger\Client\Model\Registration**](../Model/Registration.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationsDocumentsCreate**
> registrationsDocumentsCreate($registration, $type, $reference, $file, $registration2, $board_member, $description, $additional_data)

Creates a registration document.

Adds a document to an existing registration using a multipart form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registration = "registration_example"; // string | 
$type = "type_example"; // string | Type of the document.
$reference = "reference_example"; // string | Reference of the document.
$file = "/path/to/file.txt"; // \SplFileObject | Document.
$registration2 = "registration_example"; // string | Uuid of the related registration to which the document must be added.
$board_member = "board_member_example"; // string | Uuid of the related board member related to the document. This field is mandatory when uploading an identity or an address type of document.
$description = "description_example"; // string | Optional description of the document.
$additional_data = "additional_data_example"; // string | Additional data. Use this field to set the IBAN if you upload an IBAN.

try {
    $apiInstance->registrationsDocumentsCreate($registration, $type, $reference, $file, $registration2, $board_member, $description, $additional_data);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->registrationsDocumentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration** | **string**|  |
 **type** | **string**| Type of the document. |
 **reference** | **string**| Reference of the document. |
 **file** | **\SplFileObject**| Document. |
 **registration2** | **string**| Uuid of the related registration to which the document must be added. | [optional]
 **board_member** | **string**| Uuid of the related board member related to the document. This field is mandatory when uploading an identity or an address type of document. | [optional]
 **description** | **string**| Optional description of the document. | [optional]
 **additional_data** | **string**| Additional data. Use this field to set the IBAN if you upload an IBAN. | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationsDocumentsList**
> object registrationsDocumentsList($registration, $page)

List of documents by registration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registration = "registration_example"; // string | Unique registration identifier
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->registrationsDocumentsList($registration, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->registrationsDocumentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration** | **string**| Unique registration identifier |
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationsList**
> object registrationsList($ordering, $page, $uuid, $marketplace, $name, $ref, $status)

Retrieves the list of registrations by marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Filter by unique registration identifier.
$marketplace = "marketplace_example"; // string | Filter by unique marketplace identifier
$name = "name_example"; // string | Filter by registration name.
$ref = "ref_example"; // string | Filter by registration reference.
$status = "status_example"; // string | Filter by registration status.

try {
    $result = $apiInstance->registrationsList($ordering, $page, $uuid, $marketplace, $name, $ref, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->registrationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **uuid** | **string**| Filter by unique registration identifier. | [optional]
 **marketplace** | **string**| Filter by unique marketplace identifier | [optional]
 **name** | **string**| Filter by registration name. | [optional]
 **ref** | **string**| Filter by registration reference. | [optional]
 **status** | **string**| Filter by registration status. | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationsRead**
> \Swagger\Client\Model\Registration registrationsRead($uuid)

Retrieves a single registration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique registration identifier.

try {
    $result = $apiInstance->registrationsRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->registrationsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique registration identifier. |

### Return type

[**\Swagger\Client\Model\Registration**](../Model/Registration.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationsStatus**
> \Swagger\Client\Model\Registration registrationsStatus($uuid)

Retrieves the status of a single registration. Deprecated: use registration_read instead.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique registration identifier.

try {
    $result = $apiInstance->registrationsStatus($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->registrationsStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique registration identifier. |

### Return type

[**\Swagger\Client\Model\Registration**](../Model/Registration.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationsSubmit**
> registrationsSubmit($uuid)

Submits the registration for examination by our services.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique registration identifier.

try {
    $apiInstance->registrationsSubmit($uuid);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->registrationsSubmit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique registration identifier. |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationsUpdate**
> \Swagger\Client\Model\Registration registrationsUpdate($data, $uuid)

Updates a registration.

This endpoint can also be used to create or update the board members and the activity of the registration.  If a `board` is sent with a list of board members without any uuid, this operation will result in creating new board members.  > Note: The server will return a validation error if the email already exists for this registration.  If you want to update the board member, you must provide its `uuid`.   As the `board` field is mandatory, you must send an empty list if do not want to update or create any boardmember.  > e.g. : `{ ..., \"board\": [], ... }`  The `activity` works differently: you just need to provide 1 (and only 1) activity on  each request (POST and PUT).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\Registration(); // \Swagger\Client\Model\Registration | 
$uuid = "uuid_example"; // string | Unique registration identifier.

try {
    $result = $apiInstance->registrationsUpdate($data, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->registrationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Registration**](../Model/Registration.md)|  |
 **uuid** | **string**| Unique registration identifier. |

### Return type

[**\Swagger\Client\Model\Registration**](../Model/Registration.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

