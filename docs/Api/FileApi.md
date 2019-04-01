# Swagger\Client\FileApi

All URIs are relative to *https://api.yousign.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filesIdDownloadGet**](FileApi.md#filesIdDownloadGet) | **GET** /files/{id}/download | Download a File
[**filesIdDuplicatePost**](FileApi.md#filesIdDuplicatePost) | **POST** /files/{id}/duplicate | Duplicate a File
[**filesIdGet**](FileApi.md#filesIdGet) | **GET** /files/{id} | Find a File by ID
[**filesPost**](FileApi.md#filesPost) | **POST** /files | Create a new File

# **filesIdDownloadGet**
> string filesIdDownloadGet($id, $authorization)

Download a File

Used to get the base64 content of a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->filesIdDownloadGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->filesIdDownloadGet: ', $e->getMessage(), PHP_EOL;
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

# **filesIdDuplicatePost**
> \Swagger\Client\Model\FileOutput filesIdDuplicatePost($id, $authorization)

Duplicate a File

Duplicate a file. It will be create a clone of this file, with a new ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->filesIdDuplicatePost($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->filesIdDuplicatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\FileOutput**](../Model/FileOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filesIdGet**
> \Swagger\Client\Model\FileOutput filesIdGet($id, $authorization)

Find a File by ID

Returns all the information regarding the File but without its content (for performance issue).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->filesIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->filesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\FileOutput**](../Model/FileOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filesPost**
> \Swagger\Client\Model\FileOutput filesPost($body, $content_type, $authorization)

Create a new File

Used to upload a file in base64 on our platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FileInput(); // \Swagger\Client\Model\FileInput | 
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->filesPost($body, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->filesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FileInput**](../Model/FileInput.md)|  |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\FileOutput**](../Model/FileOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

