# YouSignClient\ConsentProcessApi

All URIs are relative to *https://api.yousign.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consentProcessesGet**](ConsentProcessApi.md#consentProcessesGet) | **GET** /consent_processes | Get list of Consent Processes
[**consentProcessesIdDelete**](ConsentProcessApi.md#consentProcessesIdDelete) | **DELETE** /consent_processes/{id} | Delete a Consent Process
[**consentProcessesIdGet**](ConsentProcessApi.md#consentProcessesIdGet) | **GET** /consent_processes/{id} | Get a Consent Process
[**consentProcessesIdPut**](ConsentProcessApi.md#consentProcessesIdPut) | **PUT** /consent_processes/{id} | Update a Consent Process
[**consentProcessesPost**](ConsentProcessApi.md#consentProcessesPost) | **POST** /consent_processes | Create a new Consent Process

# **consentProcessesGet**
> \YouSignClient\Model\ConsentProcessOutput[] consentProcessesGet($member, $procedure, $authorization)

Get list of Consent Processes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ConsentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$member = "member_example"; // string | id of member (required for anonymous)
$procedure = "procedure_example"; // string | id of procedure (required if the member attribut is not set)
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->consentProcessesGet($member, $procedure, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentProcessApi->consentProcessesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member** | [**string**](../Model/.md)| id of member (required for anonymous) | [optional]
 **procedure** | [**string**](../Model/.md)| id of procedure (required if the member attribut is not set) | [optional]
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication | [optional]

### Return type

[**\YouSignClient\Model\ConsentProcessOutput[]**](../Model/ConsentProcessOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consentProcessesIdDelete**
> consentProcessesIdDelete($id, $authorization)

Delete a Consent Process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ConsentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $apiInstance->consentProcessesIdDelete($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling ConsentProcessApi->consentProcessesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consentProcessesIdGet**
> \YouSignClient\Model\ConsentProcessOutput consentProcessesIdGet($id, $member, $authorization)

Get a Consent Process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ConsentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$member = "member_example"; // string | id of member (required for anonymous)
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->consentProcessesIdGet($id, $member, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentProcessApi->consentProcessesIdGet: ', $e->getMessage(), PHP_EOL;
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

[**\YouSignClient\Model\ConsentProcessOutput**](../Model/ConsentProcessOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consentProcessesIdPut**
> \YouSignClient\Model\ConsentProcessOutput consentProcessesIdPut($body, $id, $content_type, $authorization)

Update a Consent Process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ConsentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSignClient\Model\ConsentProcessInput(); // \YouSignClient\Model\ConsentProcessInput | 
$id = "id_example"; // string | 
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->consentProcessesIdPut($body, $id, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentProcessApi->consentProcessesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSignClient\Model\ConsentProcessInput**](../Model/ConsentProcessInput.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request | [optional]
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication | [optional]

### Return type

[**\YouSignClient\Model\ConsentProcessOutput**](../Model/ConsentProcessOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consentProcessesPost**
> \YouSignClient\Model\ConsentProcessOutput consentProcessesPost($body, $content_type, $authorization)

Create a new Consent Process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ConsentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSignClient\Model\ConsentProcessInput(); // \YouSignClient\Model\ConsentProcessInput | 
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->consentProcessesPost($body, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentProcessApi->consentProcessesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSignClient\Model\ConsentProcessInput**](../Model/ConsentProcessInput.md)|  |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request | [optional]
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication | [optional]

### Return type

[**\YouSignClient\Model\ConsentProcessOutput**](../Model/ConsentProcessOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

