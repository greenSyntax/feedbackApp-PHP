
FeedbackApp :rocket:
=======
Neither it's a mamomth project nor I'm clamimg it. Just a REST API for feedback Service.

## Header 
Every API Request has this as a Header.
```json
Content-type:application/json
```

## Endpoints
#### + [GET] /feedbacks

Get List of All Feedbacks. 

```html
http://[BASE_URL]/feedbackApp/feedbacks
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
},
{
"feedback_id": "35",
"user_name": "Abhix",
"feedback_text": "Hi This is Abhishek. This is something auspecious.",
"user_mail": "NULL",
"time_stamp": "2017-03-07 07:02:17",
"processing_status": "0",
"user_ip": null,
"os_type": null,
"user_device": null
}
]
}
```
==========

#### + [GET] /feedback/:feedback_id

Get a Single Feedback by it's ID. 

```html
http://[BASE_URL]/feedbackapp/feedback/34
```
#### Response
JSON would be like this, when your request for /feedback/{feedback_id} API.

```json
{
"response_code": 200,
"response_status": "OK",
"response_data": {
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
}
```
============

#### + [POST] /createFeedack

Create Feedback.  

```html
http://[BASE_URL]/feedbackapp/createFeedback
```
#### Request Body

```json
{
"user_name" : "Rahul",
"feedback_text" : "Hi This is Rahul."
}
```


#### Response
JSON would be like this, when your request for creating feedback.

```json
{
"response_code": 201,
"response_status": "Inserted Successfully.",
"response_data": ""
}
```

=======

#### + [POST] /updateFeedback

Update feedback *Processing Status*.

```html
http://[BASE_URL]/feedbackapp/updateFeedback
```
### Request
Body Request Would be Like

```json
{
"processing_status":"1",
"feedback_id":"34"
}
```

#### Response
JSON would be like this, when your request for /updateFeedaback API.

```json
{
"response_code": 200,
"response_status": "Updated",
"response_data": "Updated Successfully"
}	
```

===========

#### + [GET] /deleteFeedback/:feedback_id

Delete Feedback entry by their Id.

```html
http://[BASE_URL]/feedbackapp/deleteFeedback/34
```

#### Response
JSON would be like this, when your request for /deleteFeedback API.

```json
{
"response_code": 204,
"response_status": "Deleted Successfully",
"response_data": "DELETED"
}	
```

===========

## Postman
You can download postman's file. In case, you want to test via Postman API Tester.


