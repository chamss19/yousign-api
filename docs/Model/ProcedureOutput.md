# ProcedureOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id of the object | [optional] 
**name** | **string** | Name of procedure | [optional] 
**description** | **string** | Description of procedure | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Created date of the object | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Updated date of the object | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | Expiration date. The procedure will be out of usage after this date. | [optional] 
**status** | **string** | Status of the procedure | [optional] 
**creator** | **string** | Id of creator of the object | [optional] 
**creator_first_name** | **string** | The creator&#x27;s first name | [optional] 
**creator_last_name** | **string** | The creator&#x27;s last name | [optional] 
**company** | **string** | Id of company creator of the object | [optional] 
**template** | **bool** | Defines if the procedure is a template (if true). A template could be used by a procedure to get all properties of the template. Check parent parameter for more information. | [optional] 
**ordered** | **bool** | Defines an order for the procedure process. If true, position of each member will be used to define the validation workflow. | [optional] 
**parent** | **string** | Id of a procedure template used to get all properties of the template in the new procedure. If you set other properties, they will be replaced. If you don’t set other properties, all properties will be cloned. | [optional] 
**metadata** | **object** | Metadata of the procedure | [optional] 
**config** | [**\YouSignClient\Model\ProcedureConfig**](ProcedureConfig.md) |  | [optional] 
**members** | [**\YouSignClient\Model\MemberOutput[]**](MemberOutput.md) |  | [optional] 
**files** | [**\YouSignClient\Model\FileOutput[]**](FileOutput.md) | List of files used in the procedure. | [optional] 
**related_files_enable** | **bool** | Defines if related files are available. | [optional] 
**archive** | **bool** | Defines if the files of the procedure must be archived (Company should be allowed) | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

