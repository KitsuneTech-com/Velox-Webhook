## VeloxWebhookException codes

### Webhook\Classes\RequestController
| Code | Text                                                | Explanation                                                                                                                                                                                                                               |
|------|-----------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1    | Unable to create temporary file for webhook payload | The payload for each request is stored in a temporary file to be accessed by the dispatch script. This file couldn't be created. Check to see if the user running the script has permission to write to the system's temporary directory. |
| 2    | Unable to start webhook dispatcher                  | The dispatch script couldn't be run.
