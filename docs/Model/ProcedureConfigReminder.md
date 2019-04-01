# ProcedureConfigReminder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval** | **int** | Number of days between each reminder. The date of the creation of the procedure is used to define the date of the reminder. For example, if you set 2 and the procedure is created at 2017-01-01T15:03:01, the first reminder will be sent at 2017-01-03T15:03:01. | [default to 1]
**limit** | **int** | Limit of reminders sent. | [optional] [default to 5]
**config** | [**\YouSignClient\Model\ProcedureConfigReminderConfig**](ProcedureConfigReminderConfig.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

