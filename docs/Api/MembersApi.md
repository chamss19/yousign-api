# Swagger\Client\MembersApi

All URIs are relative to *https://api.yousign.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**membersGet**](MembersApi.md#membersGet) | **GET** /members | Get all Members
[**membersIdDelete**](MembersApi.md#membersIdDelete) | **DELETE** /members/{id} | Delete a Member
[**membersIdProofGet**](MembersApi.md#membersIdProofGet) | **GET** /members/{id}/proof | Get a proof file of a Member
[**membersIdPut**](MembersApi.md#membersIdPut) | **PUT** /members/{id} | Edit a Member
[**membersPost**](MembersApi.md#membersPost) | **POST** /members | Create a new Member

# **membersGet**
> \Swagger\Client\Model\MemberOutput[] membersGet($procedure)

Get all Members

Returns the list of Members of a Company. It only usefull if you use the query params named \"procedure\" for retrieve all members of a procedure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$procedure = "procedure_example"; // string | 

try {
    $result = $apiInstance->membersGet($procedure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->membersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **procedure** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MemberOutput[]**](../Model/MemberOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membersIdDelete**
> membersIdDelete($id)

Delete a Member

Delete a member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $apiInstance->membersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->membersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membersIdProofGet**
> string membersIdProofGet($id, $authorization)

Get a proof file of a Member

Get a proof file of a member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->membersIdProofGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->membersIdProofGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membersIdPut**
> \Swagger\Client\Model\MemberOutput membersIdPut($body, $id)

Edit a Member

Edit a member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MemberInput(); // \Swagger\Client\Model\MemberInput | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->membersIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->membersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MemberInput**](../Model/MemberInput.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\MemberOutput**](../Model/MemberOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membersPost**
> \Swagger\Client\Model\MemberOutput membersPost($body)

Create a new Member

Create a new member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MemberInput(); // \Swagger\Client\Model\MemberInput | 

try {
    $result = $apiInstance->membersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->membersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MemberInput**](../Model/MemberInput.md)|  |

### Return type

[**\Swagger\Client\Model\MemberOutput**](../Model/MemberOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

