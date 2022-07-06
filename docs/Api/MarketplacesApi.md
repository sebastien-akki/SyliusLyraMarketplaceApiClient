# Swagger\Client\MarketplacesApi

All URIs are relative to *https://secure.lyra.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketplacesAliasRead**](MarketplacesApi.md#marketplacesAliasRead) | **GET** /marketplaces/{marketplace}/alias/{alias} | Retrieves the details of an alias.
[**marketplacesList**](MarketplacesApi.md#marketplacesList) | **GET** /marketplaces/ | List of marketplace to which you have at least view access privilege.
[**marketplacesOrdersList**](MarketplacesApi.md#marketplacesOrdersList) | **GET** /marketplaces/{marketplace}/orders | List of orders related to a single marketplace.
[**marketplacesRead**](MarketplacesApi.md#marketplacesRead) | **GET** /marketplaces/{uuid} | Retrieves the details of a marketplace
[**marketplacesRegistrationsList**](MarketplacesApi.md#marketplacesRegistrationsList) | **GET** /marketplaces/{marketplace}/registrations | Retrieves the list of registrations by marketplace.
[**marketplacesSellersList**](MarketplacesApi.md#marketplacesSellersList) | **GET** /marketplaces/{marketplace}/sellers | List of sellers by marketplace.
[**marketplacesTransactionsList**](MarketplacesApi.md#marketplacesTransactionsList) | **GET** /marketplaces/{marketplace}/transactions | Transaction list by marketplace.
[**marketplacesWebhooksCreate**](MarketplacesApi.md#marketplacesWebhooksCreate) | **POST** /marketplaces/{marketplace}/webhooks | Create a single webhook for the marketplace.
[**marketplacesWebhooksDelete**](MarketplacesApi.md#marketplacesWebhooksDelete) | **DELETE** /marketplaces/{marketplace}/webhooks/{event} | 
[**marketplacesWebhooksList**](MarketplacesApi.md#marketplacesWebhooksList) | **GET** /marketplaces/{marketplace}/webhooks | List every webhook for the marketplace, set as well as unset.
[**marketplacesWebhooksUpdate**](MarketplacesApi.md#marketplacesWebhooksUpdate) | **PUT** /marketplaces/{marketplace}/webhooks | Update a single webhook for the marketplace.


# **marketplacesAliasRead**
> \Swagger\Client\Model\GetTokenDetails marketplacesAliasRead($alias, $marketplace)

Retrieves the details of an alias.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias = "alias_example"; // string | Select the alias details using the alias itself.
$marketplace = "marketplace_example"; // string | Select the marketplace using the unique marketplace identifier.

try {
    $result = $apiInstance->marketplacesAliasRead($alias, $marketplace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesAliasRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias** | **string**| Select the alias details using the alias itself. |
 **marketplace** | **string**| Select the marketplace using the unique marketplace identifier. |

### Return type

[**\Swagger\Client\Model\GetTokenDetails**](../Model/GetTokenDetails.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplacesList**
> object marketplacesList($ordering, $page)

List of marketplace to which you have at least view access privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->marketplacesList($ordering, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesList: ', $e->getMessage(), PHP_EOL;
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

# **marketplacesOrdersList**
> object marketplacesOrdersList($marketplace, $ordering, $page, $uuid, $marketplace2, $amount, $status)

List of orders related to a single marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace = "marketplace_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Select the order using its unique identifier
$marketplace2 = "marketplace_example"; // string | Select the marketplace using the unique marketplace identifier.
$amount = 8.14; // float | Filter by total amount of the order.
$status = "status_example"; // string | Filter by the current status of the order.

try {
    $result = $apiInstance->marketplacesOrdersList($marketplace, $ordering, $page, $uuid, $marketplace2, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesOrdersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace** | **string**|  |
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **uuid** | **string**| Select the order using its unique identifier | [optional]
 **marketplace2** | **string**| Select the marketplace using the unique marketplace identifier. | [optional]
 **amount** | **float**| Filter by total amount of the order. | [optional]
 **status** | **string**| Filter by the current status of the order. | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplacesRead**
> \Swagger\Client\Model\Marketplace marketplacesRead($uuid)

Retrieves the details of a marketplace



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Select the marketplace using its unique identifier.

try {
    $result = $apiInstance->marketplacesRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Select the marketplace using its unique identifier. |

### Return type

[**\Swagger\Client\Model\Marketplace**](../Model/Marketplace.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplacesRegistrationsList**
> object marketplacesRegistrationsList($marketplace, $ordering, $page, $uuid, $marketplace2, $name, $ref, $status)

Retrieves the list of registrations by marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace = "marketplace_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Filter by unique registration identifier.
$marketplace2 = "marketplace_example"; // string | Filter by unique marketplace identifier
$name = "name_example"; // string | Filter by registration name.
$ref = "ref_example"; // string | Filter by registration reference.
$status = "status_example"; // string | Filter by registration status.

try {
    $result = $apiInstance->marketplacesRegistrationsList($marketplace, $ordering, $page, $uuid, $marketplace2, $name, $ref, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesRegistrationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace** | **string**|  |
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **uuid** | **string**| Filter by unique registration identifier. | [optional]
 **marketplace2** | **string**| Filter by unique marketplace identifier | [optional]
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

# **marketplacesSellersList**
> object marketplacesSellersList($marketplace, $ordering, $page, $uuid, $status)

List of sellers by marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace = "marketplace_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Select the seller using the unique seller identifier.
$status = "status_example"; // string | Filter by current status of the seller

try {
    $result = $apiInstance->marketplacesSellersList($marketplace, $ordering, $page, $uuid, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesSellersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace** | **string**|  |
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

# **marketplacesTransactionsList**
> object marketplacesTransactionsList($marketplace, $ordering, $page)

Transaction list by marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace = "marketplace_example"; // string | Filter by marketplace using the unique marketplace identifier.
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->marketplacesTransactionsList($marketplace, $ordering, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesTransactionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace** | **string**| Filter by marketplace using the unique marketplace identifier. |
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

# **marketplacesWebhooksCreate**
> \Swagger\Client\Model\Webhook marketplacesWebhooksCreate($marketplace, $data)

Create a single webhook for the marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace = "marketplace_example"; // string | 
$data = new \Swagger\Client\Model\Webhook(); // \Swagger\Client\Model\Webhook | 

try {
    $result = $apiInstance->marketplacesWebhooksCreate($marketplace, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesWebhooksCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace** | **string**|  |
 **data** | [**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)|  |

### Return type

[**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplacesWebhooksDelete**
> marketplacesWebhooksDelete($event, $marketplace)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event = "event_example"; // string | 
$marketplace = "marketplace_example"; // string | 

try {
    $apiInstance->marketplacesWebhooksDelete($event, $marketplace);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesWebhooksDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event** | **string**|  |
 **marketplace** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplacesWebhooksList**
> \Swagger\Client\Model\Webhook[] marketplacesWebhooksList($marketplace, $page)

List every webhook for the marketplace, set as well as unset.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace = "marketplace_example"; // string | Marketplace unique identifier.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->marketplacesWebhooksList($marketplace, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesWebhooksList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace** | **string**| Marketplace unique identifier. |
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

[**\Swagger\Client\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplacesWebhooksUpdate**
> \Swagger\Client\Model\Webhook marketplacesWebhooksUpdate($marketplace, $data)

Update a single webhook for the marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace = "marketplace_example"; // string | 
$data = new \Swagger\Client\Model\Webhook(); // \Swagger\Client\Model\Webhook | 

try {
    $result = $apiInstance->marketplacesWebhooksUpdate($marketplace, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->marketplacesWebhooksUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace** | **string**|  |
 **data** | [**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)|  |

### Return type

[**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

