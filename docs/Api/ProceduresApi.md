# YouSignClient\ProceduresApi

All URIs are relative to *https://api.yousign.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportProceduresGet**](ProceduresApi.md#exportProceduresGet) | **GET** /export/procedures | Export Procedure list
[**proceduresGet**](ProceduresApi.md#proceduresGet) | **GET** /procedures | Get Procedure list
[**proceduresIdDelete**](ProceduresApi.md#proceduresIdDelete) | **DELETE** /procedures/{id} | Delete a Procedure
[**proceduresIdDuplicatePost**](ProceduresApi.md#proceduresIdDuplicatePost) | **POST** /procedures/{id}/duplicate | Duplicate a Procedure
[**proceduresIdGet**](ProceduresApi.md#proceduresIdGet) | **GET** /procedures/{id} | Find a Procedure by ID
[**proceduresIdProofGet**](ProceduresApi.md#proceduresIdProofGet) | **GET** /procedures/{id}/proof | Get a Procedure proof file
[**proceduresIdPut**](ProceduresApi.md#proceduresIdPut) | **PUT** /procedures/{id} | Update a Procedure
[**proceduresIdRemindPost**](ProceduresApi.md#proceduresIdRemindPost) | **POST** /procedures/{id}/remind | Remind a Procedure
[**proceduresPost**](ProceduresApi.md#proceduresPost) | **POST** /procedures | Create a new Procedure

# **exportProceduresGet**
> string exportProceduresGet($authorization, $status, $name, $members_firstname, $members_lastname, $members_phone, $members_email, $files_name, $created_at, $updated_at, $expires_at, $deleted_at, $order)

Export Procedure list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication
$status = "status_example"; // string | Return Procedure list based on the status for each Procedure
$name = "name_example"; // string | Filter by name (contains)
$members_firstname = "members_firstname_example"; // string | Filter by member firstname (contains)
$members_lastname = "members_lastname_example"; // string | Filter by member lastname (contains)
$members_phone = "members_phone_example"; // string | Filter by member phone (contains)
$members_email = "members_email_example"; // string | Filter by member email (contains)
$files_name = "files_name_example"; // string | Filter by file name (contains)
$created_at = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Filter by creation date  createdAt[after]=2017-09-18 createdAt[before]=2017-09-18 createdAt[strictly_after]=2017-09-18 createdAt[strictly_before]=2017-09-18
$updated_at = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Filter by update date  updatedAt[after]=2017-09-18 updatedAt[before]=2017-09-18 updatedAt[strictly_after]=2017-09-18 updatedAt[strictly_before]=2017-09-18
$expires_at = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Filter by expire date  expiresAt[after]=2017-09-18 expiresAt[before]=2017-09-18 expiresAt[strictly_after]=2017-09-18 expiresAt[strictly_before]=2017-09-18
$deleted_at = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Filter by delete date  deletedAt[after]=2017-09-18 deletedAt[before]=2017-09-18 deletedAt[strictly_after]=2017-09-18 deletedAt[strictly_before]=2017-09-18
$order = array("order_example"); // string[] | Order by attribut

try {
    $result = $apiInstance->exportProceduresGet($authorization, $status, $name, $members_firstname, $members_lastname, $members_phone, $members_email, $files_name, $created_at, $updated_at, $expires_at, $deleted_at, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->exportProceduresGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |
 **status** | [**string**](../Model/.md)| Return Procedure list based on the status for each Procedure | [optional]
 **name** | [**string**](../Model/.md)| Filter by name (contains) | [optional]
 **members_firstname** | [**string**](../Model/.md)| Filter by member firstname (contains) | [optional]
 **members_lastname** | [**string**](../Model/.md)| Filter by member lastname (contains) | [optional]
 **members_phone** | [**string**](../Model/.md)| Filter by member phone (contains) | [optional]
 **members_email** | [**string**](../Model/.md)| Filter by member email (contains) | [optional]
 **files_name** | [**string**](../Model/.md)| Filter by file name (contains) | [optional]
 **created_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by creation date  createdAt[after]&#x3D;2017-09-18 createdAt[before]&#x3D;2017-09-18 createdAt[strictly_after]&#x3D;2017-09-18 createdAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **updated_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by update date  updatedAt[after]&#x3D;2017-09-18 updatedAt[before]&#x3D;2017-09-18 updatedAt[strictly_after]&#x3D;2017-09-18 updatedAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **expires_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by expire date  expiresAt[after]&#x3D;2017-09-18 expiresAt[before]&#x3D;2017-09-18 expiresAt[strictly_after]&#x3D;2017-09-18 expiresAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **deleted_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by delete date  deletedAt[after]&#x3D;2017-09-18 deletedAt[before]&#x3D;2017-09-18 deletedAt[strictly_after]&#x3D;2017-09-18 deletedAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **order** | [**string[]**](../Model/string.md)| Order by attribut | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresGet**
> \YouSignClient\Model\ProcedureOutput[] proceduresGet($authorization, $status, $template, $members, $items_per_page, $pagination, $page, $name, $members_firstname, $members_lastname, $members_phone, $members_email, $files_name, $created_at, $updated_at, $expires_at, $deleted_at, $order)

Get Procedure list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication
$status = "status_example"; // string | Return Procedure list based on the status for each Procedure
$template = True; // bool | Used to get Procedure template list
$members = array("members_example"); // string[] | Get Procedure list for given members (paraph mode)
$items_per_page = "items_per_page_example"; // string | Number of items per page for the pagination
$pagination = True; // bool | Disable the pagination
$page = 56; // int | Page of the pagination
$name = "name_example"; // string | Filter by name (contains)
$members_firstname = "members_firstname_example"; // string | Filter by member firstname (contains)
$members_lastname = "members_lastname_example"; // string | Filter by member lastname (contains)
$members_phone = "members_phone_example"; // string | Filter by member phone (contains)
$members_email = "members_email_example"; // string | Filter by member email (contains)
$files_name = "files_name_example"; // string | Filter by file name (contains)
$created_at = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Filter by creation date  createdAt[after]=2017-09-18 createdAt[before]=2017-09-18 createdAt[strictly_after]=2017-09-18 createdAt[strictly_before]=2017-09-18
$updated_at = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Filter by update date  updatedAt[after]=2017-09-18 updatedAt[before]=2017-09-18 updatedAt[strictly_after]=2017-09-18 updatedAt[strictly_before]=2017-09-18
$expires_at = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Filter by expire date  expiresAt[after]=2017-09-18 expiresAt[before]=2017-09-18 expiresAt[strictly_after]=2017-09-18 expiresAt[strictly_before]=2017-09-18
$deleted_at = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Filter by delete date  deletedAt[after]=2017-09-18 deletedAt[before]=2017-09-18 deletedAt[strictly_after]=2017-09-18 deletedAt[strictly_before]=2017-09-18
$order = array("order_example"); // string[] | Order by attribut

try {
    $result = $apiInstance->proceduresGet($authorization, $status, $template, $members, $items_per_page, $pagination, $page, $name, $members_firstname, $members_lastname, $members_phone, $members_email, $files_name, $created_at, $updated_at, $expires_at, $deleted_at, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |
 **status** | [**string**](../Model/.md)| Return Procedure list based on the status for each Procedure | [optional]
 **template** | [**bool**](../Model/.md)| Used to get Procedure template list | [optional]
 **members** | [**string[]**](../Model/string.md)| Get Procedure list for given members (paraph mode) | [optional]
 **items_per_page** | [**string**](../Model/.md)| Number of items per page for the pagination | [optional]
 **pagination** | [**bool**](../Model/.md)| Disable the pagination | [optional]
 **page** | [**int**](../Model/.md)| Page of the pagination | [optional]
 **name** | [**string**](../Model/.md)| Filter by name (contains) | [optional]
 **members_firstname** | [**string**](../Model/.md)| Filter by member firstname (contains) | [optional]
 **members_lastname** | [**string**](../Model/.md)| Filter by member lastname (contains) | [optional]
 **members_phone** | [**string**](../Model/.md)| Filter by member phone (contains) | [optional]
 **members_email** | [**string**](../Model/.md)| Filter by member email (contains) | [optional]
 **files_name** | [**string**](../Model/.md)| Filter by file name (contains) | [optional]
 **created_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by creation date  createdAt[after]&#x3D;2017-09-18 createdAt[before]&#x3D;2017-09-18 createdAt[strictly_after]&#x3D;2017-09-18 createdAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **updated_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by update date  updatedAt[after]&#x3D;2017-09-18 updatedAt[before]&#x3D;2017-09-18 updatedAt[strictly_after]&#x3D;2017-09-18 updatedAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **expires_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by expire date  expiresAt[after]&#x3D;2017-09-18 expiresAt[before]&#x3D;2017-09-18 expiresAt[strictly_after]&#x3D;2017-09-18 expiresAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **deleted_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by delete date  deletedAt[after]&#x3D;2017-09-18 deletedAt[before]&#x3D;2017-09-18 deletedAt[strictly_after]&#x3D;2017-09-18 deletedAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **order** | [**string[]**](../Model/string.md)| Order by attribut | [optional]

### Return type

[**\YouSignClient\Model\ProcedureOutput[]**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdDelete**
> proceduresIdDelete($id, $authorization)

Delete a Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $apiInstance->proceduresIdDelete($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdDuplicatePost**
> \YouSignClient\Model\ProcedureOutput proceduresIdDuplicatePost($body, $authorization, $id)

Duplicate a Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSignClient\Model\ProcedureDuplicateInput(); // \YouSignClient\Model\ProcedureDuplicateInput | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication
$id = "id_example"; // string | 

try {
    $result = $apiInstance->proceduresIdDuplicatePost($body, $authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdDuplicatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSignClient\Model\ProcedureDuplicateInput**](../Model/ProcedureDuplicateInput.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\YouSignClient\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdGet**
> \YouSignClient\Model\ProcedureOutput proceduresIdGet($id, $authorization)

Find a Procedure by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->proceduresIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\YouSignClient\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdProofGet**
> string proceduresIdProofGet($id, $authorization)

Get a Procedure proof file

Get a Procedure proof file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->proceduresIdProofGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdProofGet: ', $e->getMessage(), PHP_EOL;
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

# **proceduresIdPut**
> \YouSignClient\Model\ProcedureOutput proceduresIdPut($body, $content_type, $authorization, $id)

Update a Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSignClient\Model\ProcedureInput(); // \YouSignClient\Model\ProcedureInput | 
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication
$id = "id_example"; // string | 

try {
    $result = $apiInstance->proceduresIdPut($body, $content_type, $authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSignClient\Model\ProcedureInput**](../Model/ProcedureInput.md)|  |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\YouSignClient\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdRemindPost**
> \YouSignClient\Model\ProcedureOutput proceduresIdRemindPost($body, $authorization, $id)

Remind a Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSignClient\Model\ProcedureRemindInput(); // \YouSignClient\Model\ProcedureRemindInput | 
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication
$id = "id_example"; // string | 

try {
    $result = $apiInstance->proceduresIdRemindPost($body, $authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdRemindPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSignClient\Model\ProcedureRemindInput**](../Model/ProcedureRemindInput.md)|  |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\YouSignClient\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresPost**
> \YouSignClient\Model\ProcedureOutput proceduresPost($body, $content_type, $authorization)

Create a new Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSignClient\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSignClient\Model\ProcedureInput(); // \YouSignClient\Model\ProcedureInput | 
$content_type = "content_type_example"; // string | The MIME type of the body of the request
$authorization = "authorization_example"; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->proceduresPost($body, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSignClient\Model\ProcedureInput**](../Model/ProcedureInput.md)|  |
 **content_type** | [**string**](../Model/.md)| The MIME type of the body of the request |
 **authorization** | [**string**](../Model/.md)| Authentication credentials for HTTP authentication |

### Return type

[**\YouSignClient\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

