# Swagger\Client\TokensApi

All URIs are relative to *https://secure.lyra.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokensCreate**](TokensApi.md#tokensCreate) | **POST** /tokens/ | Creates a token.
[**tokensCreateEmbedded**](TokensApi.md#tokensCreateEmbedded) | **POST** /tokens/embedded/ | 
[**tokensList**](TokensApi.md#tokensList) | **GET** /tokens/ | Retrieves the list of tokens related to one marketplace.
[**tokensRead**](TokensApi.md#tokensRead) | **GET** /tokens/{uuid} | Retrieves the details of a single token.


# **tokensCreate**
> \Swagger\Client\Model\OrderRegister tokensCreate($data)

Creates a token.

An 'alias' is an alphanumeric code that allows the re-use of a registered CB.  A 'token' embodies the registration process, from the request to the handle of the alias.   It is thus binded to a specific buyer within the scope of a specific marketplace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\OrderRegister(); // \Swagger\Client\Model\OrderRegister | 

try {
    $result = $apiInstance->tokensCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\OrderRegister**](../Model/OrderRegister.md)|  |

### Return type

[**\Swagger\Client\Model\OrderRegister**](../Model/OrderRegister.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tokensCreateEmbedded**
> \Swagger\Client\Model\OrderRegister tokensCreateEmbedded($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\OrderRegister(); // \Swagger\Client\Model\OrderRegister | 

try {
    $result = $apiInstance->tokensCreateEmbedded($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensCreateEmbedded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\OrderRegister**](../Model/OrderRegister.md)|  |

### Return type

[**\Swagger\Client\Model\OrderRegister**](../Model/OrderRegister.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tokensList**
> object tokensList($ordering, $page)

Retrieves the list of tokens related to one marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->tokensList($ordering, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tokensRead**
> \Swagger\Client\Model\OrderRegister tokensRead($uuid)

Retrieves the details of a single token.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Unique token identifier.

try {
    $result = $apiInstance->tokensRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Unique token identifier. |

### Return type

[**\Swagger\Client\Model\OrderRegister**](../Model/OrderRegister.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

