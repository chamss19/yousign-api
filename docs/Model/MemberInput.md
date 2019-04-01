# MemberInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **string** | ID of the user in your companies. Informations about the member will be duplicate (first name, last name, email and phone number).  Required if none of fields above are specified. | [optional] 
**type** | **string** | Type of a member. \&quot;signer\&quot; to sign documents (legally) and \&quot;validator\&quot; to validate documents. | [optional] [default to 'signer']
**firstname** | **string** | Firstname of an external member. Required if user field is blank | [optional] 
**lastname** | **string** | Lastname of an external member. Required if user field is blank | [optional] 
**email** | **string** | Email of an external member. Required if user field is blank | [optional] 
**phone** | **string** | Phone of an external member. Required if user field is blank | [optional] 
**position** | **int** | If the procedure have the boolean \&quot;ordered\&quot; at true, you can define position of the order to invite your members to sign. Only the first member will be invited to sign.  When the first member have signed, the second will be invited, etc... | [optional] 
**file_objects** | [**\YouSignClient\Model\FileObjectInput[]**](FileObjectInput.md) |  | [optional] 
**procedure** | **string** | Procedure id reference | [optional] 
**operation_level** | **string** |  | [optional] 
**operation_custom_modes** | **string[]** |  | [optional] 
**mode_sms_configuration** | [**\YouSignClient\Model\ModeSmsConfiguration**](ModeSmsConfiguration.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

