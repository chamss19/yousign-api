# MemberOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id of the object | [optional] 
**user** | **string** | Internal user associated with the member. In this case, informations about the member will be informations of the user (first name, last name, phone number and email). | [optional] 
**type** | **string** | Type of a member. \&quot;signer\&quot; to sign documents (legally) and \&quot;validator\&quot; to validate documents. | [optional] [default to 'signer']
**firstname** | **string** | Firstname of an external member. | [optional] 
**lastname** | **string** | Lastname of an external member. | [optional] 
**email** | **string** | Email of an external member. | [optional] 
**phone** | **string** | Phone of an external member. | [optional] 
**position** | **int** | Position of the member if ordered is set to true. Example with two members, the first one could have a position set to 1, the second one set to 2. In this case, when the procedure starts, only the first member will be notified and could validate the documents. The second one could not validate the documents, he will be notified when the first signer is notified. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**status** | **string** |  | [optional] 
**file_objects** | [**\YouSignClient\Model\FileObjectOutput[]**](FileObjectOutput.md) |  | [optional] 
**comment** | **string** | Comment of a member when he refuses a signature | [optional] 
**procedure** | **string** | Procedure id reference | [optional] 
**operation_level** | **string** |  | [optional] 
**operation_custom_modes** | **string[]** |  | [optional] 
**mode_sms_configuration** | [**\YouSignClient\Model\ModeSmsConfiguration**](ModeSmsConfiguration.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

