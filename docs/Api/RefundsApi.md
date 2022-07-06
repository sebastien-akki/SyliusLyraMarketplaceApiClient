# Swagger\Client\RefundsApi

All URIs are relative to *https://secure.lyra.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refundsCreate**](RefundsApi.md#refundsCreate) | **POST** /refunds/ | Creates a refund.
[**refundsDelete**](RefundsApi.md#refundsDelete) | **DELETE** /refunds/{uuid} | Cancels a refund.
[**refundsList**](RefundsApi.md#refundsList) | **GET** /refunds/ | Retrieves the list of refunds related to an order.
[**refundsRead**](RefundsApi.md#refundsRead) | **GET** /refunds/{uuid} | Retrieve a single refund.
[**refundsUpdate**](RefundsApi.md#refundsUpdate) | **PUT** /refunds/{uuid} | Updates a refund.


# **refundsCreate**
> \Swagger\Client\Model\Refund refundsCreate($data)

Creates a refund.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\Refund(); // \Swagger\Client\Model\Refund | 

try {
    $result = $apiInstance->refundsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Refund**](../Model/Refund.md)|  |

### Return type

[**\Swagger\Client\Model\Refund**](../Model/Refund.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundsDelete**
> refundsDelete($uuid)

Cancels a refund.

This operation sets the refund status to `CANCEL`.  In order to be cancelled, the status of the refund must be `PENDING`.  > Note that the status will also be checked up on the fly before actually cancelling the refund. If the refund has been meanwhile authorized or captured, the operation will then throw an error 405.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique refund identifier.

try {
    $apiInstance->refundsDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique refund identifier. |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundsList**
> object refundsList($ordering, $page, $uuid, $transaction, $amount, $status)

Retrieves the list of refunds related to an order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Filter using the unique refund identifier.
$transaction = "transaction_example"; // string | Filter using the unique transaction identifier
$amount = 8.14; // float | Filter by amount.
$status = "status_example"; // string | Filter by status.

try {
    $result = $apiInstance->refundsList($ordering, $page, $uuid, $transaction, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **uuid** | **string**| Filter using the unique refund identifier. | [optional]
 **transaction** | **string**| Filter using the unique transaction identifier | [optional]
 **amount** | **float**| Filter by amount. | [optional]
 **status** | **string**| Filter by status. | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundsRead**
> \Swagger\Client\Model\Refund refundsRead($uuid)

Retrieve a single refund.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique refund identifier

try {
    $result = $apiInstance->refundsRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique refund identifier |

### Return type

[**\Swagger\Client\Model\Refund**](../Model/Refund.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundsUpdate**
> \Swagger\Client\Model\Refund refundsUpdate($data, $uuid)

Updates a refund.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\Refund(); // \Swagger\Client\Model\Refund | 
$uuid = "uuid_example"; // string | Unique refund identifier

try {
    $result = $apiInstance->refundsUpdate($data, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Refund**](../Model/Refund.md)|  |
 **uuid** | **string**| Unique refund identifier |

### Return type

[**\Swagger\Client\Model\Refund**](../Model/Refund.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

