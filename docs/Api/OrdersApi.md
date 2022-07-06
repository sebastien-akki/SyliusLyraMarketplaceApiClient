# Swagger\Client\OrdersApi

All URIs are relative to *https://secure.lyra.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersActivateItems**](OrdersApi.md#ordersActivateItems) | **POST** /orders/{uuid}/activate | Activate items.
[**ordersCreate**](OrdersApi.md#ordersCreate) | **POST** /orders | Creates a new order.
[**ordersCreate_0**](OrdersApi.md#ordersCreate_0) | **POST** /orders/ | Creates a new order.
[**ordersDelete**](OrdersApi.md#ordersDelete) | **DELETE** /orders/{uuid} | Delete an order by the given uuid
[**ordersExecuteEmbedded**](OrdersApi.md#ordersExecuteEmbedded) | **GET** /orders/{uuid}/execute-embedded | Submits the order to payment using the embedded form.
[**ordersExecuteEmbeddedExecuteEmbedded**](OrdersApi.md#ordersExecuteEmbeddedExecuteEmbedded) | **GET** /orders/{uuid}/execute-embedded/token | Submits the order to payment using the embedded form.
[**ordersExecuteExecuteToken**](OrdersApi.md#ordersExecuteExecuteToken) | **GET** /orders/{uuid}/execute/token | Submits payment and creates a new token.
[**ordersExecuteMit**](OrdersApi.md#ordersExecuteMit) | **GET** /orders/{uuid}/execute-mit | Submits an order to a 0-click payment
[**ordersExecutePayzen**](OrdersApi.md#ordersExecutePayzen) | **GET** /orders/{uuid}/execute | Submits the order to payment using the PayZen form.
[**ordersItemsList**](OrdersApi.md#ordersItemsList) | **GET** /orders/{order}/items | List of items by order, by seller or by creation date.
[**ordersList**](OrdersApi.md#ordersList) | **GET** /orders/ | List of orders related to a single marketplace.
[**ordersPersist**](OrdersApi.md#ordersPersist) | **GET** /orders/{uuid}/persist | Create a persist link
[**ordersRead**](OrdersApi.md#ordersRead) | **GET** /orders/{uuid} | Retrieves the details of a single order.
[**ordersRefundsList**](OrdersApi.md#ordersRefundsList) | **GET** /orders/{order}/refunds | Retrieves the list of refunds related to an order.
[**ordersTransactionsList**](OrdersApi.md#ordersTransactionsList) | **GET** /orders/{order}/transactions | Transaction list by order.
[**ordersTransfersList**](OrdersApi.md#ordersTransfersList) | **GET** /orders/{order}/transfers | List of transfers by order, by seller, by item, by transaction or by creation date.
[**ordersUpdate**](OrdersApi.md#ordersUpdate) | **PUT** /orders/{uuid} | Updates an existing order
[**ordersValidate**](OrdersApi.md#ordersValidate) | **POST** /orders/{uuid}/validate | Validates a payment.


# **ordersActivateItems**
> ordersActivateItems($uuid)

Activate items.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Activates every order items that are in a hold status.

try {
    $apiInstance->ordersActivateItems($uuid);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersActivateItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Activates every order items that are in a hold status. |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersCreate**
> \Swagger\Client\Model\OrderSerializer ordersCreate($data, $expand)

Creates a new order.

**IMPORTANT**: When creating an order with embedded items, you MUST add `expand=items` in the url query.  > e.g. `https://secure.lyra.com/marketplace/orders?expand=items`  If this parameter is omitted, the server will return a code 201 CREATED but the order will have no item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\OrderSerializer(); // \Swagger\Client\Model\OrderSerializer | 
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->ordersCreate($data, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\OrderSerializer**](../Model/OrderSerializer.md)|  |
 **expand** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderSerializer**](../Model/OrderSerializer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersCreate_0**
> \Swagger\Client\Model\OrderSerializer ordersCreate_0($data, $expand)

Creates a new order.

**IMPORTANT**: When creating an order with embedded items, you MUST add `expand=items` in the url query.  > e.g. `https://secure.lyra.com/marketplace/orders?expand=items`  If this parameter is omitted, the server will return a code 201 CREATED but the order will have no item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\OrderSerializer(); // \Swagger\Client\Model\OrderSerializer | 
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->ordersCreate_0($data, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersCreate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\OrderSerializer**](../Model/OrderSerializer.md)|  |
 **expand** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderSerializer**](../Model/OrderSerializer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersDelete**
> ordersDelete($uuid)

Delete an order by the given uuid

After a serie of validation checks, the order status is set to `CANCELLED`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The unique order identifier of the order to be deleted.

try {
    $apiInstance->ordersDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The unique order identifier of the order to be deleted. |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersExecuteEmbedded**
> object ordersExecuteEmbedded($uuid)

Submits the order to payment using the embedded form.

If the order status is CREATED, this operation sends the order to the VAD and returns a for use in the embedded form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Select the order to be executed using the order unique identifier.

try {
    $result = $apiInstance->ordersExecuteEmbedded($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersExecuteEmbedded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Select the order to be executed using the order unique identifier. |

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersExecuteEmbeddedExecuteEmbedded**
> object ordersExecuteEmbeddedExecuteEmbedded($uuid)

Submits the order to payment using the embedded form.

If the order status is CREATED, this operation sends the order to the VAD and returns a for use in the embedded form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Select the order to be executed using the order unique identifier.

try {
    $result = $apiInstance->ordersExecuteEmbeddedExecuteEmbedded($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersExecuteEmbeddedExecuteEmbedded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Select the order to be executed using the order unique identifier. |

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersExecuteExecuteToken**
> object ordersExecuteExecuteToken($uuid)

Submits payment and creates a new token.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Select the order to be executed using the order unique identifier.

try {
    $result = $apiInstance->ordersExecuteExecuteToken($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersExecuteExecuteToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Select the order to be executed using the order unique identifier. |

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersExecuteMit**
> ordersExecuteMit($uuid)

Submits an order to a 0-click payment

Immediately initiate a payment using the alias provided on order creation.  There will be no intermediate step.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Select the order to be executed using the order unique identifier.

try {
    $apiInstance->ordersExecuteMit($uuid);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersExecuteMit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Select the order to be executed using the order unique identifier. |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersExecutePayzen**
> object ordersExecutePayzen($uuid)

Submits the order to payment using the PayZen form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Select the order to be executed using the order unique identifier.

try {
    $result = $apiInstance->ordersExecutePayzen($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersExecutePayzen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Select the order to be executed using the order unique identifier. |

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersItemsList**
> object ordersItemsList($order, $ordering, $page, $start_date, $end_date, $uuid, $seller, $order2, $amount, $status)

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


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$start_date = "start_date_example"; // string | Lower creation date and time boundary, in format YYYY-MM-DD HH:MM.
$end_date = "end_date_example"; // string | Upper create date and time boundary, in format YYYY-MM-DD HH:MM.
$uuid = "uuid_example"; // string | Select the item using the unique item identifier.
$seller = "seller_example"; // string | Filter by seller using the unique seller identifier.
$order2 = "order_example"; // string | Filter by order using the Unique order identifier.
$amount = 8.14; // float | Filter by amount of the item.
$status = "status_example"; // string | Filter by the status of the item. May be one of CREATED, PENDING, SUCCEEDED, CANCELLED, FAILED, ABANDONED

try {
    $result = $apiInstance->ordersItemsList($order, $ordering, $page, $start_date, $end_date, $uuid, $seller, $order2, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**|  |
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **start_date** | **string**| Lower creation date and time boundary, in format YYYY-MM-DD HH:MM. | [optional]
 **end_date** | **string**| Upper create date and time boundary, in format YYYY-MM-DD HH:MM. | [optional]
 **uuid** | **string**| Select the item using the unique item identifier. | [optional]
 **seller** | **string**| Filter by seller using the unique seller identifier. | [optional]
 **order2** | **string**| Filter by order using the Unique order identifier. | [optional]
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

# **ordersList**
> object ordersList($ordering, $page, $uuid, $marketplace, $amount, $status)

List of orders related to a single marketplace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Select the order using its unique identifier
$marketplace = "marketplace_example"; // string | Select the marketplace using the unique marketplace identifier.
$amount = 8.14; // float | Filter by total amount of the order.
$status = "status_example"; // string | Filter by the current status of the order.

try {
    $result = $apiInstance->ordersList($ordering, $page, $uuid, $marketplace, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **uuid** | **string**| Select the order using its unique identifier | [optional]
 **marketplace** | **string**| Select the marketplace using the unique marketplace identifier. | [optional]
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

# **ordersPersist**
> \Swagger\Client\Model\OrderSerializer ordersPersist($uuid)

Create a persist link



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 

try {
    $result = $apiInstance->ordersPersist($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPersist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\Swagger\Client\Model\OrderSerializer**](../Model/OrderSerializer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersRead**
> \Swagger\Client\Model\OrderSerializer ordersRead($uuid)

Retrieves the details of a single order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Select the order using the unique order identifier.

try {
    $result = $apiInstance->ordersRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Select the order using the unique order identifier. |

### Return type

[**\Swagger\Client\Model\OrderSerializer**](../Model/OrderSerializer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersRefundsList**
> object ordersRefundsList($order, $ordering, $page, $uuid, $transaction, $amount, $status)

Retrieves the list of refunds related to an order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Filter using the unique refund identifier.
$transaction = "transaction_example"; // string | Filter using the unique transaction identifier
$amount = 8.14; // float | Filter by amount.
$status = "status_example"; // string | Filter by status.

try {
    $result = $apiInstance->ordersRefundsList($order, $ordering, $page, $uuid, $transaction, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersRefundsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**|  |
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

# **ordersTransactionsList**
> object ordersTransactionsList($order, $ordering, $page)

Transaction list by order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | Filter by order using the unique order identifier.
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->ordersTransactionsList($order, $ordering, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersTransactionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| Filter by order using the unique order identifier. |
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

# **ordersTransfersList**
> object ordersTransfersList($order, $ordering, $page, $uuid, $item, $amount, $status)

List of transfers by order, by seller, by item, by transaction or by creation date.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$page = 56; // int | A page number within the paginated result set.
$uuid = "uuid_example"; // string | Select the transfer using the transfer unique identifier
$item = "item_example"; // string | Filter by item using the unique item identifier.
$amount = "amount_example"; // string | Filter by amount of the item.
$status = "status_example"; // string | Filter by the current status of the item.

try {
    $result = $apiInstance->ordersTransfersList($order, $ordering, $page, $uuid, $item, $amount, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersTransfersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**|  |
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

# **ordersUpdate**
> \Swagger\Client\Model\OrderSerializer ordersUpdate($data, $uuid, $expand)

Updates an existing order

**IMPORTANT**: When updating an order with nested objects like items or transactions, you MUST add `expand=items`, `expand=transactions` or `expand=items,transactions` in the url query. E.g. :   > `https://secure.lyra.com/marketplace/orders/<uuid>?expand=items` or  > `https://secure.lyra.com/marketplace/orders/<uuid>?expand=transactions` or  > `https://secure.lyra.com/marketplace/orders/<uuid>?expand=items,transactions`.  If this parameter is omitted, the server may return a code `200 OK` but the nested objects will remain unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\OrderSerializer(); // \Swagger\Client\Model\OrderSerializer | 
$uuid = "uuid_example"; // string | Unique order identifier.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->ordersUpdate($data, $uuid, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\OrderSerializer**](../Model/OrderSerializer.md)|  |
 **uuid** | **string**| Unique order identifier. |
 **expand** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderSerializer**](../Model/OrderSerializer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersValidate**
> ordersValidate($uuid)

Validates a payment.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Select the order to be validated using the order unique identifier.

try {
    $apiInstance->ordersValidate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersValidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Select the order to be validated using the order unique identifier. |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

