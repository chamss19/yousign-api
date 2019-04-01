# YouSignClient\ConsentProcessValueApi

All URIs are relative to *https://api.yousign.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consentProcessValuesGet**](ConsentProcessValueApi.md#consentProcessValuesGet) | **GET** /consent_process_values | Get list of Consent Process Value
[**consentProcessValuesIdGet**](ConsentProcessValueApi.md#consentProcessValuesIdGet) | **GET** /consent_process_values/{id} | Get a Consent Process Value
[**consentProcessValuesPost**](ConsentProcessValueApi.md#consentProcessValuesPost) | **POST** /consent_process_values | Create a new Consent Process Value

# **consentProcessValuesGet**
> \YouSignClient\Model\ConsentProcessValueOutput consentProcessValuesGet($member, $authorization)

Get list of Consent Process Value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ConsentProcessValueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member = "member_example"; // string | id of member
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->consentProcessValuesGet($member, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentProcessValueApi->consentProcessValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member** | [**string**](../Model/.md)| id of member |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication | [optional]

### Return type

[**\YouSignClient\Model\ConsentProcessValueOutput**](../Model/ConsentProcessValueOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consentProcessValuesIdGet**
> \YouSignClient\Model\ConsentProcessValueOutput consentProcessValuesIdGet($id, $member, $authorization)

Get a Consent Process Value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ConsentProcessValueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$member = "member_example"; // string | id of member (required for anonymous)
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->consentProcessValuesIdGet($id, $member, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentProcessValueApi->consentProcessValuesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **member** | [**string**](../Model/.md)| id of member (required for anonymous) | [optional]
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication | [optional]

### Return type

[**\YouSignClient\Model\ConsentProcessValueOutput**](../Model/ConsentProcessValueOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consentProcessValuesPost**
> \YouSignClient\Model\ConsentProcessValueOutput consentProcessValuesPost($body, $content_type, $authorization)

Create a new Consent Process Value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ConsentProcessValueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSignClient\Model\ConsentProcessValueInput(); // \YouSignClient\Model\ConsentProcessValueInput | 
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->consentProcessValuesPost($body, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentProcessValueApi->consentProcessValuesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSignClient\Model\ConsentProcessValueInput**](../Model/ConsentProcessValueInput.md)|  |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request | [optional]
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication | [optional]

### Return type

[**\YouSignClient\Model\ConsentProcessValueOutput**](../Model/ConsentProcessValueOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

