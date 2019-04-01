# FileObjectOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id of the object | [optional] 
**file** | [**\YouSign\Client\Model\FileOutput**](FileOutput.md) |  | 
**page** | **int** | Page of the visible signature. This property is ignored if fieldName is set. If you want a visible signature, you must set page, position and fieldName. | [optional] 
**position** | **string** | Coordinates of the signature image to set. Format is : “llx,lly,urx,ury”. llx&#x3D;left lower x coordinate, lly&#x3D;left lower y coordinate, urx&#x3D;upper right x coordinate, ury &#x3D; upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr | [optional] 
**field_name** | **string** | Name of the signature field existing in the document | [optional] 
**mention** | **string** | Text associated above the signature image.  You can use some variable inside : {{date.en}} {{date.fr}} {{time.en}} {{time.fr}} that it will be parsed to show the date of the signature. | [optional] 
**mention2__internal** | **string** | Text associated below the signature image.  You can use some variable inside : {{date.en}} {{date.fr}} {{time.en}} {{time.fr}} that it will be parsed to show the date of the signature. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Created date of the object | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Updated date of the object | [optional] 
**executed_at** | [**\DateTime**](\DateTime.md) | Date of signature or validation | [optional] 
**reason** | **string** | The reason they are signing the agreement | [optional] [default to 'Signed by Yousign']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

