# YouSign\Client\SignatureUIApi

All URIs are relative to *https://api.yousign.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**signatureUiLabelsGet**](SignatureUIApi.md#signatureUiLabelsGet) | **GET** /signature_ui_labels | Get Signature UI Labels
[**signatureUiLabelsIdDelete**](SignatureUIApi.md#signatureUiLabelsIdDelete) | **DELETE** /signature_ui_labels/{id} | Delete a Signature UI Label
[**signatureUiLabelsIdGet**](SignatureUIApi.md#signatureUiLabelsIdGet) | **GET** /signature_ui_labels/{id} | Find a Signature UI Label by ID
[**signatureUiLabelsIdPut**](SignatureUIApi.md#signatureUiLabelsIdPut) | **PUT** /signature_ui_labels/{id} | Update a Signature UI Label
[**signatureUiLabelsPost**](SignatureUIApi.md#signatureUiLabelsPost) | **POST** /signature_ui_labels | Create a new Signature UI Label
[**signatureUisGet**](SignatureUIApi.md#signatureUisGet) | **GET** /signature_uis | Get Signature UI list
[**signatureUisIdDelete**](SignatureUIApi.md#signatureUisIdDelete) | **DELETE** /signature_uis/{id} | Delete a Signature UI
[**signatureUisIdGet**](SignatureUIApi.md#signatureUisIdGet) | **GET** /signature_uis/{id} | Find a Signature UI by ID
[**signatureUisIdPut**](SignatureUIApi.md#signatureUisIdPut) | **PUT** /signature_uis/{id} | Update a Signature UI
[**signatureUisPost**](SignatureUIApi.md#signatureUisPost) | **POST** /signature_uis | Create a new Signature UI

# **signatureUiLabelsGet**
> \YouSign\Client\Model\SignatureUiLabelOutput[] signatureUiLabelsGet($name, $signature_ui)

Get Signature UI Labels

Only usefull if you use a filter with name or signatureUI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Filtering on name of signature ui labels
$signature_ui = "signature_ui_example"; // string | Filtering on id of signature ui resource

try {
    $result = $apiInstance->signatureUiLabelsGet($name, $signature_ui);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUiLabelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | [**string**](../Model/.md)| Filtering on name of signature ui labels | [optional]
 **signature_ui** | [**string**](../Model/.md)| Filtering on id of signature ui resource | [optional]

### Return type

[**\YouSign\Client\Model\SignatureUiLabelOutput[]**](../Model/SignatureUiLabelOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signatureUiLabelsIdDelete**
> signatureUiLabelsIdDelete($id, $id2)

Delete a Signature UI Label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$id2 = "id_example"; // string | Id of signature ui label

try {
    $apiInstance->signatureUiLabelsIdDelete($id, $id2);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUiLabelsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **id2** | [**string**](../Model/.md)| Id of signature ui label | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signatureUiLabelsIdGet**
> \YouSign\Client\Model\SignatureUiLabelOutput signatureUiLabelsIdGet($id, $id2)

Find a Signature UI Label by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$id2 = "id_example"; // string | id of signature ui label

try {
    $result = $apiInstance->signatureUiLabelsIdGet($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUiLabelsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **id2** | [**string**](../Model/.md)| id of signature ui label | [optional]

### Return type

[**\YouSign\Client\Model\SignatureUiLabelOutput**](../Model/SignatureUiLabelOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signatureUiLabelsIdPut**
> \YouSign\Client\Model\SignatureUiLabelOutput signatureUiLabelsIdPut($id, $id2)

Update a Signature UI Label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$id2 = "id_example"; // string | Id of signature ui labels

try {
    $result = $apiInstance->signatureUiLabelsIdPut($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUiLabelsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **id2** | [**string**](../Model/.md)| Id of signature ui labels | [optional]

### Return type

[**\YouSign\Client\Model\SignatureUiLabelOutput**](../Model/SignatureUiLabelOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signatureUiLabelsPost**
> \YouSign\Client\Model\SignatureUiLabelOutput signatureUiLabelsPost($body)

Create a new Signature UI Label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSign\Client\Model\SignatureUiLabelInput(); // \YouSign\Client\Model\SignatureUiLabelInput | 

try {
    $result = $apiInstance->signatureUiLabelsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUiLabelsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSign\Client\Model\SignatureUiLabelInput**](../Model/SignatureUiLabelInput.md)|  |

### Return type

[**\YouSign\Client\Model\SignatureUiLabelOutput**](../Model/SignatureUiLabelOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signatureUisGet**
> \YouSign\Client\Model\SignatureUiOutput[] signatureUisGet()

Get Signature UI list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->signatureUisGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUisGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\YouSign\Client\Model\SignatureUiOutput[]**](../Model/SignatureUiOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signatureUisIdDelete**
> signatureUisIdDelete($id, $id2)

Delete a Signature UI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$id2 = "id_example"; // string | Id of the signature ui

try {
    $apiInstance->signatureUisIdDelete($id, $id2);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUisIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **id2** | [**string**](../Model/.md)| Id of the signature ui | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signatureUisIdGet**
> \YouSign\Client\Model\SignatureUiOutput signatureUisIdGet($id, $id2)

Find a Signature UI by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$id2 = "id_example"; // string | id of a signature ui

try {
    $result = $apiInstance->signatureUisIdGet($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUisIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **id2** | [**string**](../Model/.md)| id of a signature ui | [optional]

### Return type

[**\YouSign\Client\Model\SignatureUiOutput**](../Model/SignatureUiOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signatureUisIdPut**
> \YouSign\Client\Model\SignatureUiInputUpdate signatureUisIdPut($id, $id2)

Update a Signature UI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$id2 = "id_example"; // string | id of signature ui to update

try {
    $result = $apiInstance->signatureUisIdPut($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUisIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **id2** | [**string**](../Model/.md)| id of signature ui to update | [optional]

### Return type

[**\YouSign\Client\Model\SignatureUiInputUpdate**](../Model/SignatureUiInputUpdate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signatureUisPost**
> \YouSign\Client\Model\SignatureUiOutput signatureUisPost($body)

Create a new Signature UI

Here is the url format to build on your side to get a custom signature interface with your settings :  https://webapp.yousign.com/procedure/sign?members=~2Fmembers~2F__MEMBER_ID__&signatureUi=~2Fsignature_uis~2F__SIGNATURE_UI_ID__

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\SignatureUIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSign\Client\Model\SignatureUiInput(); // \YouSign\Client\Model\SignatureUiInput | 

try {
    $result = $apiInstance->signatureUisPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureUIApi->signatureUisPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSign\Client\Model\SignatureUiInput**](../Model/SignatureUiInput.md)|  |

### Return type

[**\YouSign\Client\Model\SignatureUiOutput**](../Model/SignatureUiOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

