# Swagger\Client\SellersApi

All URIs are relative to *https://secure.lyra.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sellersCashoutsList**](SellersApi.md#sellersCashoutsList) | **GET** /sellers/{seller}/cashouts | List of cashouts associated with a marketplace.
[**sellersItemsList**](SellersApi.md#sellersItemsList) | **GET** /sellers/{seller}/items | List of items by order, by seller or by creation date.
[**sellersList**](SellersApi.md#sellersList) | **GET** /sellers/ | List of sellers by marketplace.
[**sellersRead**](SellersApi.md#sellersRead) | **GET** /sellers/{uuid} | Retrieves the details of a single seller.
[**sellersTransfersList**](SellersApi.md#sellersTransfersList) | **GET** /sellers/{seller}/transfers | List of transfers by order, by seller, by item, by transaction or by creation date.


# **sellersCashoutsList**
> object sellersCashoutsList($seller, $page, $page_size, $capture_start_date, $capture_end_date, $seller2)

List of cashouts associated with a marketplace.

Returns a list of cashouts related to the marketplace(s) managed by the current user, and ordered by `captured_date` descending.  The query may optionally be restricted to specific temporal boundaries and by seller.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller = "seller_example"; // string | 
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.
$capture_start_date = "capture_start_date_example"; // string | Lower date filter boundary (format YYYY-MM-DD. Eg : 2019-01-01).
$capture_end_date = "capture_end_date_example"; // string | Upper date filter boundary (format YYYY-MM-DD. Eg : 2019-01-01).
$seller2 = "seller_example"; // string | Filter by unique seller identifier.

try {
    $result = $apiInstance->sellersCashoutsList($seller, $page, $page_size, $capture_start_date, $capture_end_date, $seller2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->sellersCashoutsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller** | **string**|  |
 **page** | **int**| A page number within the paginated result set. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **capture_start_date** | **string**| Lower date filter boundary (format YYYY-MM-DD. Eg : 2019-01-01). | [optional]
 **capture_end_date** | **string**| Upper date filter boundary (format YYYY-MM-DD. Eg : 2019-01-01). | [optional]
 **seller2** | **string**| Filter by unique seller identifier. | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sellersItemsList**
> object sellersItemsList($seller, $ordering, $page, $start_date, $end_date, $uuid, $seller2, $order, $amount, $status)

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


$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller = "seller_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$start_date = "start_date_example"; // string | Lower creation date and time boundary, in format YYYY-MM-DD HH:MM.
$end_date = "end_date_example"; // string | Upper create date and time boundary, in format YYYY-MM-DD HH:MM.
$uuid = "uuid_example"; // string | Select the item using the unique item identifier.
$seller2 = "seller_example"; // string | Filter by seller using the unique seller identifier.
$order = "order_example"; // string | Filter by order using the Unique order identifier.
$amount = 8.14; // float | Filter by amount of the item.
$status = "status_example"; // string | Filter by the status of the item. May be one of CREATED, PENDING, SUCCEEDED, CANCELLED, FAILED, ABANDONED

try {
    $result = $apiInstance->sellersItemsList($seller, $ordering, $page, $start_date, $end_date, $uuid, $seller2, $order, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->sellersItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller** | **string**|  |
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **start_date** | **string**| Lower creation date and time boundary, in format YYYY-MM-DD HH:MM. | [optional]
 **end_date** | **string**| Upper create date and time boundary, in format YYYY-MM-DD HH:MM. | [optional]
 **uuid** | **string**| Select the item using the unique item identifier. | [optional]
 **seller2** | **string**| Filter by seller using the unique seller identifier. | [optional]
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

# **sellersList**
> object sellersList($ordering, $page, $uuid, $status)

List of sellers by marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Select the seller using the unique seller identifier.
$status = "status_example"; // string | Filter by current status of the seller

try {
    $result = $apiInstance->sellersList($ordering, $page, $uuid, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->sellersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **uuid** | **string**| Select the seller using the unique seller identifier. | [optional]
 **status** | **string**| Filter by current status of the seller | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sellersRead**
> \Swagger\Client\Model\Seller sellersRead($uuid)

Retrieves the details of a single seller.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique seller identifier.

try {
    $result = $apiInstance->sellersRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->sellersRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique seller identifier. |

### Return type

[**\Swagger\Client\Model\Seller**](../Model/Seller.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sellersTransfersList**
> object sellersTransfersList($seller, $ordering, $page, $uuid, $item, $amount, $status)

List of transfers by order, by seller, by item, by transaction or by creation date.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller = "seller_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Select the transfer using the transfer unique identifier
$item = "item_example"; // string | Filter by item using the unique item identifier.
$amount = "amount_example"; // string | Filter by amount of the item.
$status = "status_example"; // string | Filter by the current status of the item.

try {
    $result = $apiInstance->sellersTransfersList($seller, $ordering, $page, $uuid, $item, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->sellersTransfersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller** | **string**|  |
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

