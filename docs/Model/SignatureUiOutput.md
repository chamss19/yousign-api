# SignatureUiOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Resource&#x27;s ID | [optional] 
**name** | **string** | Resource&#x27;s name | 
**description** | **string** |  | [optional] 
**enable_header_bar** | **bool** | Toggle header bar of the app view | [optional] [default to true]
**enable_header_bar_sign_as** | **bool** | Toggle \&quot;Sign as\&quot; band on the top of the app view | [optional] [default to true]
**enable_sidebar** | **bool** | Toggle sidebar of the app view | [optional] [default to true]
**enable_member_list** | **bool** | Toggle list of members in the procedure | [optional] [default to true]
**enable_document_list** | **bool** | Toggle list of documents in the procedure | [optional] [default to true]
**enable_document_download** | **bool** | Toggle downloads buttons for documents | [optional] [default to true]
**enable_activities** | **bool** | Toggle activity feed | [optional] [default to true]
**authentication_popup** | **bool** | True for use a popup for enter the SMS code, false for use a fullscreen view. | [optional] [default to false]
**default_zoom** | [**BigDecimal**](BigDecimal.md) | Default value for zoom of the PDF viewer. Default value is the adapted to the resolution of your screen. | [optional] 
**logo** | **string** | Base64 of your logo | [optional] 
**sign_image_types_available** | **string[]** | Allow sign images types available for signature. | [optional] 
**default_language** | **string** | Default language of the view. Must be in \&quot;languages\&quot; field. | [optional] 
**languages** | **string[]** | Array of allowed languages, use country code | [optional] 
**labels** | [**\YouSign\Client\Model\SignatureUiLabelOutput[]**](SignatureUiLabelOutput.md) |  | [optional] 
**fonts** | **string[]** | List of fonts to load on the view. (Loaded via google fonts) | [optional] 
**style** | **string** | CSS for customize the view | [optional] 
**redirect_cancel** | **object** | Redirection when a procedure is refused | [optional] 
**redirect_error** | **object** | Redirect when the member get an error of the signature of the procedure | [optional] 
**redirect_success** | **object** | Redirect when the member have successfully signed the procedure | [optional] 
**creator** | **string** | Creator&#x27;s ID | [optional] 
**company** | **string** | Associated Company&#x27;s ID | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Date of creation | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date of last update | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

