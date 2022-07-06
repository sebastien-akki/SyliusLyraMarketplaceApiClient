# Swagger\Client\CashoutsApi

All URIs are relative to *https://secure.lyra.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cashoutsList**](CashoutsApi.md#cashoutsList) | **GET** /cashouts/ | List of cashouts associated with a marketplace.
[**cashoutsRead**](CashoutsApi.md#cashoutsRead) | **GET** /cashouts/{uuid} | Detail of a cashout.


# **cashoutsList**
> object cashoutsList($page, $page_size, $capture_start_date, $capture_end_date, $seller)

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


$apiInstance = new Swagger\Client\Api\CashoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.
$capture_start_date = "capture_start_date_example"; // string | Lower date filter boundary (format YYYY-MM-DD. Eg : 2019-01-01).
$capture_end_date = "capture_end_date_example"; // string | Upper date filter boundary (format YYYY-MM-DD. Eg : 2019-01-01).
$seller = "seller_example"; // string | Filter by unique seller identifier.

try {
    $result = $apiInstance->cashoutsList($page, $page_size, $capture_start_date, $capture_end_date, $seller);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashoutsApi->cashoutsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| A page number within the paginated result set. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **capture_start_date** | **string**| Lower date filter boundary (format YYYY-MM-DD. Eg : 2019-01-01). | [optional]
 **capture_end_date** | **string**| Upper date filter boundary (format YYYY-MM-DD. Eg : 2019-01-01). | [optional]
 **seller** | **string**| Filter by unique seller identifier. | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashoutsRead**
> \Swagger\Client\Model\Cashout cashoutsRead($uuid)

Detail of a cashout.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CashoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique identifier of the cashout.

try {
    $result = $apiInstance->cashoutsRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashoutsApi->cashoutsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique identifier of the cashout. |

### Return type

[**\Swagger\Client\Model\Cashout**](../Model/Cashout.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

