# CheckDocumentIdentitiesOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id of the object | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Created date of the object | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Updated date of the object | [optional] 
**first_names** | **string[]** | List of firstnames to check on document | [optional] 
**birth_name** | **string** | Birth name to check on document | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | Birth date to check on document | [optional] 
**company** | **string** | Company creator of the object | [optional] 
**creator** | **string** | Creator of the object | [optional] 
**document_type** | **string** | Type of document | [optional] 
**extracted_first_names** | **string[]** | Extracted firstnames on the document | [optional] 
**extracted_birth_name** | **string** | Extracted birth name on the document | [optional] 
**extracted_birth_date** | [**\DateTime**](\DateTime.md) | Extracted birth date on the document | [optional] 
**extracted_gender** | **string** | Extracted gender on the document | [optional] 
**extracted_issuance_date** | [**\DateTime**](\DateTime.md) | Extracted issuance date on the document | [optional] 
**extracted_expiration_date** | [**\DateTime**](\DateTime.md) | Extracted expiration date on the document | [optional] 
**extracted_mrz** | **string[]** | Extracted MRZ on the document | [optional] 
**first_name_valid** | **bool** | Defines if one firstname sent in the input is valid | [optional] 
**birth_name_valid** | **bool** | Defines if birth name sent in the input is valid | [optional] 
**mrz_valid** | **bool** | Defines if MRZ sent in the input is valid | [optional] 
**expired** | **bool** | Defines if the document is expired | [optional] 
**valid** | **bool** | Defines if the document is valid | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

