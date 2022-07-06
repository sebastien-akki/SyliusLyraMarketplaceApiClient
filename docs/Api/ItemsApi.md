# Swagger\Client\ItemsApi

All URIs are relative to *https://secure.lyra.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemsActivate**](ItemsApi.md#itemsActivate) | **POST** /items/{uuid}/activate | Activates the item, i.e. toggles &#x60;hold_payment&#x60; to false.
[**itemsCreate**](ItemsApi.md#itemsCreate) | **POST** /items/ | Creates an item.
[**itemsList**](ItemsApi.md#itemsList) | **GET** /items/ | List of items by order, by seller or by creation date.
[**itemsRead**](ItemsApi.md#itemsRead) | **GET** /items/{uuid} | Retrieves the details of an item.
[**itemsTransfersList**](ItemsApi.md#itemsTransfersList) | **GET** /items/{item}/transfers | List of transfers by order, by seller, by item, by transaction or by creation date.
[**itemsUpdate**](ItemsApi.md#itemsUpdate) | **PUT** /items/{uuid} | Updates an existing item


# **itemsActivate**
> itemsActivate($uuid)

Activates the item, i.e. toggles `hold_payment` to false.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique item identifier.

try {
    $apiInstance->itemsActivate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique item identifier. |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsCreate**
> \Swagger\Client\Model\ItemSerializer itemsCreate($data)

Creates an item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\ItemSerializer(); // \Swagger\Client\Model\ItemSerializer | 

try {
    $result = $apiInstance->itemsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ItemSerializer**](../Model/ItemSerializer.md)|  |

### Return type

[**\Swagger\Client\Model\ItemSerializer**](../Model/ItemSerializer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsList**
> object itemsList($ordering, $page, $start_date, $end_date, $uuid, $seller, $order, $amount, $status)

List of items by order, by seller or by creation date.

The following selection keys are defined in the path :  * **_/order/<order_uuid>/items** : items by order ; * **_/seller/<seller_uuid>/items** : items by seller ;  You may also query all items to which you have access. In that case, they may be filtered by date, by seller, by order, by status, by amount, or directly selected by its uuid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$start_date = "start_date_example"; // string | Lower creation date and time boundary, in format YYYY-MM-DD HH:MM.
$end_date = "end_date_example"; // string | Upper create date and time boundary, in format YYYY-MM-DD HH:MM.
$uuid = "uuid_example"; // string | Select the item using the unique item identifier.
$seller = "seller_example"; // string | Filter by seller using the unique seller identifier.
$order = "order_example"; // string | Filter by order using the Unique order identifier.
$amount = 8.14; // float | Filter by amount of the item.
$status = "status_example"; // string | Filter by the status of the item. May be one of CREATED, PENDING, SUCCEEDED, CANCELLED, FAILED, ABANDONED

try {
    $result = $apiInstance->itemsList($ordering, $page, $start_date, $end_date, $uuid, $seller, $order, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **start_date** | **string**| Lower creation date and time boundary, in format YYYY-MM-DD HH:MM. | [optional]
 **end_date** | **string**| Upper create date and time boundary, in format YYYY-MM-DD HH:MM. | [optional]
 **uuid** | **string**| Select the item using the unique item identifier. | [optional]
 **seller** | **string**| Filter by seller using the unique seller identifier. | [optional]
 **order** | **string**| Filter by order using the Unique order identifier. | [optional]
 **amount** | **float**| Filter by amount of the item. | [optional]
 **status** | **string**| Filter by the status of the item. May be one of CREATED, PENDING, SUCCEEDED, CANCELLED, FAILED, ABANDONED | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsRead**
> \Swagger\Client\Model\ItemSerializer itemsRead($uuid)

Retrieves the details of an item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique item identifier.

try {
    $result = $apiInstance->itemsRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique item identifier. |

### Return type

[**\Swagger\Client\Model\ItemSerializer**](../Model/ItemSerializer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsTransfersList**
> object itemsTransfersList($item, $ordering, $page, $uuid, $item2, $amount, $status)

List of transfers by order, by seller, by item, by transaction or by creation date.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item = "item_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Select the transfer using the transfer unique identifier
$item2 = "item_example"; // string | Filter by item using the unique item identifier.
$amount = "amount_example"; // string | Filter by amount of the item.
$status = "status_example"; // string | Filter by the current status of the item.

try {
    $result = $apiInstance->itemsTransfersList($item, $ordering, $page, $uuid, $item2, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsTransfersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | **string**|  |
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **uuid** | **string**| Select the transfer using the transfer unique identifier | [optional]
 **item2** | **string**| Filter by item using the unique item identifier. | [optional]
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

# **itemsUpdate**
> \Swagger\Client\Model\ItemSerializer itemsUpdate($data, $uuid)

Updates an existing item



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\ItemSerializer(); // \Swagger\Client\Model\ItemSerializer | 
$uuid = "uuid_example"; // string | Unique item identifier.

try {
    $result = $apiInstance->itemsUpdate($data, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ItemSerializer**](../Model/ItemSerializer.md)|  |
 **uuid** | **string**| Unique item identifier. |

### Return type

[**\Swagger\Client\Model\ItemSerializer**](../Model/ItemSerializer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

