
FeedbackApp REST API
=======
Neither it's a mamomth project nor I'm clamimg it. Just a REST API for feedback Service.

## Header 
Every API Request has this as a Header.
```
Content-type:application/json
```

## Ednpoints
#### [GET] /feedbacks

It's a DISPLAY API 

```
http://[BASEURL]/feedbackApp/feedbacks
```
#### Response
JSON would be like this, when your request for /feedback API.

```json
{
"response_code": 200,
"response_status": "OK",
"response_data": [
{
"feedback_id": "34",
"user_name": "nikx",
"feedback_text": "Hi This is Nikhil. And, &lt;\/html&gt;Im Working in InnovationM",
"user_mail": "NULL",
"time_stamp": "2017-03-07 06:53:24",
"processing_status": "0",
"user_ip": null,
"os_type": null,
"user_device": null
}
]
}	
```
