# Swagger\Client\TransfersApi

All URIs are relative to *https://secure.lyra.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transfersList**](TransfersApi.md#transfersList) | **GET** /transfers/ | List of transfers by order, by seller, by item, by transaction or by creation date.
[**transfersRead**](TransfersApi.md#transfersRead) | **GET** /transfers/{uuid} | Retrieves the details of a single transfer.


# **transfersList**
> object transfersList($ordering, $page, $uuid, $item, $amount, $status)

List of transfers by order, by seller, by item, by transaction or by creation date.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Select the transfer using the transfer unique identifier
$item = "item_example"; // string | Filter by item using the unique item identifier.
$amount = "amount_example"; // string | Filter by amount of the item.
$status = "status_example"; // string | Filter by the current status of the item.

try {
    $result = $apiInstance->transfersList($ordering, $page, $uuid, $item, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transfersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **uuid** | **string**| Select the transfer using the transfer unique identifier | [optional]
 **item** | **string**| Filter by item using the unique item identifier. | [optional]
 **amount** | **string**| Filter by amount of the item. | [optional]
 **status** | **string**| Filter by the current status of the item. | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transfersRead**
> \Swagger\Client\Model\Transfer transfersRead($uuid)

Retrieves the details of a single transfer.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique transaction identifier (`trans_uuid`).

try {
    $result = $apiInstance->transfersRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transfersRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique transaction identifier (&#x60;trans_uuid&#x60;). |

### Return type

[**\Swagger\Client\Model\Transfer**](../Model/Transfer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

