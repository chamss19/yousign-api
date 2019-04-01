# Swagger\Client\CheckDocumentApi

All URIs are relative to *https://api.yousign.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkDocumentBankAccountsIdGet**](CheckDocumentApi.md#checkDocumentBankAccountsIdGet) | **GET** /check-document/bank_accounts/{id} | Get informations about a bank document (RIB)
[**checkDocumentBankAccountsPost**](CheckDocumentApi.md#checkDocumentBankAccountsPost) | **POST** /check-document/bank_accounts | Verify a bank document (RIB)
[**checkDocumentIdentitiesIdGet**](CheckDocumentApi.md#checkDocumentIdentitiesIdGet) | **GET** /check-document/identities/{id} | Get informations about an identity document (passport, id cards)
[**checkDocumentIdentitiesPost**](CheckDocumentApi.md#checkDocumentIdentitiesPost) | **POST** /check-document/identities | Verify an identity document (passport, id cards)

# **checkDocumentBankAccountsIdGet**
> \Swagger\Client\Model\CheckDocumentBankAccountsOutput checkDocumentBankAccountsIdGet($id, $authorization)

Get informations about a bank document (RIB)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->checkDocumentBankAccountsIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckDocumentApi->checkDocumentBankAccountsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\CheckDocumentBankAccountsOutput**](../Model/CheckDocumentBankAccountsOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkDocumentBankAccountsPost**
> \Swagger\Client\Model\CheckDocumentBankAccountsOutput checkDocumentBankAccountsPost($body, $content_type, $authorization)

Verify a bank document (RIB)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CheckDocumentBankAccountsInput(); // \Swagger\Client\Model\CheckDocumentBankAccountsInput | 
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->checkDocumentBankAccountsPost($body, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckDocumentApi->checkDocumentBankAccountsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CheckDocumentBankAccountsInput**](../Model/CheckDocumentBankAccountsInput.md)|  |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\CheckDocumentBankAccountsOutput**](../Model/CheckDocumentBankAccountsOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkDocumentIdentitiesIdGet**
> \Swagger\Client\Model\CheckDocumentIdentitiesOutput checkDocumentIdentitiesIdGet($id, $authorization)

Get informations about an identity document (passport, id cards)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->checkDocumentIdentitiesIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckDocumentApi->checkDocumentIdentitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\CheckDocumentIdentitiesOutput**](../Model/CheckDocumentIdentitiesOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkDocumentIdentitiesPost**
> \Swagger\Client\Model\CheckDocumentIdentitiesOutput checkDocumentIdentitiesPost($body, $content_type, $authorization)

Verify an identity document (passport, id cards)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CheckDocumentIdentitiesInput(); // \Swagger\Client\Model\CheckDocumentIdentitiesInput | 
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->checkDocumentIdentitiesPost($body, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckDocumentApi->checkDocumentIdentitiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CheckDocumentIdentitiesInput**](../Model/CheckDocumentIdentitiesInput.md)|  |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\CheckDocumentIdentitiesOutput**](../Model/CheckDocumentIdentitiesOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

