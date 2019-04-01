# YouSignClient\AuthenticationsApi

All URIs are relative to *https://api.yousign.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticationsEmailIdGet**](AuthenticationsApi.md#authenticationsEmailIdGet) | **GET** /authentications/email/{id} | Find an Authentication by ID
[**authenticationsEmailIdPut**](AuthenticationsApi.md#authenticationsEmailIdPut) | **PUT** /authentications/email/{id} | Update an Email Authentication
[**authenticationsInweboIdGet**](AuthenticationsApi.md#authenticationsInweboIdGet) | **GET** /authentications/inwebo/{id} | Get an Authentication
[**authenticationsInweboIdPut**](AuthenticationsApi.md#authenticationsInweboIdPut) | **PUT** /authentications/inwebo/{id} | Update an inwebo Authentication
[**authenticationsSmsIdGet**](AuthenticationsApi.md#authenticationsSmsIdGet) | **GET** /authentications/sms/{id} | Find an Authentication by ID
[**authenticationsSmsIdPut**](AuthenticationsApi.md#authenticationsSmsIdPut) | **PUT** /authentications/sms/{id} | Update an SMS Authentication

# **authenticationsEmailIdGet**
> \YouSignClient\Model\AuthenticationEmailOutput authenticationsEmailIdGet($id, $authorization)

Find an Authentication by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->authenticationsEmailIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsEmailIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\YouSignClient\Model\AuthenticationEmailOutput**](../Model/AuthenticationEmailOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsEmailIdPut**
> \YouSignClient\Model\AuthenticationEmailOutput authenticationsEmailIdPut($body, $authorization, $content_type, $id)

Update an Email Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$id = "id_example"; // string | 

try {
    $result = $apiInstance->authenticationsEmailIdPut($body, $authorization, $content_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsEmailIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\YouSignClient\Model\AuthenticationEmailOutput**](../Model/AuthenticationEmailOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsInweboIdGet**
> \YouSignClient\Model\AuthenticationInweboOutput authenticationsInweboIdGet($id, $authorization)

Get an Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->authenticationsInweboIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsInweboIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\YouSignClient\Model\AuthenticationInweboOutput**](../Model/AuthenticationInweboOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsInweboIdPut**
> \YouSignClient\Model\AuthenticationInweboOutput authenticationsInweboIdPut($body, $content_type, $authorization, $id)

Update an inwebo Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication
$id = "id_example"; // string | 

try {
    $result = $apiInstance->authenticationsInweboIdPut($body, $content_type, $authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsInweboIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\YouSignClient\Model\AuthenticationInweboOutput**](../Model/AuthenticationInweboOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsSmsIdGet**
> \YouSignClient\Model\AuthenticationSmsOutput authenticationsSmsIdGet($id, $authorization)

Find an Authentication by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->authenticationsSmsIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsSmsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\YouSignClient\Model\AuthenticationSmsOutput**](../Model/AuthenticationSmsOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsSmsIdPut**
> \YouSignClient\Model\AuthenticationSmsOutput authenticationsSmsIdPut($body, $authorization, $content_type, $id)

Update an SMS Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$id = "id_example"; // string | 

try {
    $result = $apiInstance->authenticationsSmsIdPut($body, $authorization, $content_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsSmsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\YouSignClient\Model\AuthenticationSmsOutput**](../Model/AuthenticationSmsOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

