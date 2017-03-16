<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'public/include/Utility.php';
require 'public/Assets/Constant.php';

$app = new \Slim\App;


function prepareResponse($statusCode, $responseMessage, $responseData, $response){

	$responseObject = array("response_code" => $statusCode, "response_status" => $responseMessage, "response_data" => $responseData);

	$response->withStatus($statusCode)
       ->withHeader('Content-Type', 'application/json')
        ->write(json_encode($responseObject, JSON_PRETTY_PRINT));

	return $response; 
}

//Testing API
$app->get('/hello/{name}', function (Request $request, Response $response) {
    
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

// ** LOGIN **
$app->get('/login', function(Request $request, Response $response){

	require 'public/include/DbManager.php';

	$db = new DbManager();
	
});


// *** GET ALL FEEBACKS LIST ***
$app->get('/feedbacks', function (Request $request, Response $response) {
    
    require 'public/include/DbManager.php';

    $db = new DbManager();
    $data = $db->selectAll();

	if($data != null){

		return prepareResponse(200, STAUS_OK, $data, $response);   
	}
	else{
		return prepareResponse(200, STAUS_OK, "", $response);   
	}

});

// *** GET SINGLE FEEDBACK BY ID ***
$app->get('/feedback/{id}', function (Request $request, Response $response) {

	//Request Fields
	$id = $request->getAttribute('id');

	require 'public/include/DbManager.php';

	$manager = new DbManager();
    $data = $manager->selectByid($id);

    // Response Validate
    if($data != null){

    	//onSucess
    	return prepareResponse(200, STAUS_OK, $data, $response);
    }
    else{

    	//onError
    	return prepareResponse(404, STATUS_NOT_FOUND, "", $response);
    }

});

// *** INSERT NEW FEEDBACK ***
$app->post('/createFeedback', function(Request $request, Response $response){

	require 'public/include/DbManager.php';

	$manager = new DbManager();

	// Get Parameters
	$user_name = Utility::getFormattedText($request->getParsedBody()['user_name']);
	$feedback_text = Utility::getFormattedText($request->getParsedBody()['feedback_text']);
	
	//FIXME
	//--$user_mail = Utility::getFormattedText($request->getParsedBody()['user_mail']);
	$user_mail = "anonymous@fixme.com";

	if($user_name != "" && $feedback_text != ""){

		//Parameters are Correct.
		$data = $manager->insertData($user_name, $feedback_text, $user_mail);

		//Response Validate
		if($data == null){

			return prepareResponse(400, $data, STATUS_BAD_REQUEST, $response);
		}

			return prepareResponse(201, $data, "", $response);
	}
	else{

		return prepareResponse(400, STATUS_BAD_REQUEST, "Parameters are not valid.", $response);
	}

});

$app->post('/updateFeedback', function(Request $request, Response $response){

	require 'public/include/DbManager.php';
	
	$manager = new DbManager();

	// Get Parameters
	$status = Utility::getFormattedText($request->getParsedBody()['processing_status']);
	$id = Utility::getFormattedText($request->getParsedBody()['feedback_id']);

	if($status != null && $id != null){

		$data = $manager->updateFeedback($id, $status);

		if($data == "NO_SUCH_ID"){

		return prepareResponse(400, STATUS_BAD_REQUEST, "There is no Such 'id'.", $response);
		}

		if($data != "ERROR"){

			return prepareResponse(200, STATUS_UPDATE, $data, $response);
		}
		else{
			return prepareResponse(400, STATUS_BAD_REQUEST, "Errro While Updating.", $response);
		}
	}
	else{

		//Invalid Request
		return prepareResponse(400, STATUS_BAD_REQUEST, "Parameters are not valid.", $response);
	}

});


// *** DELETE FEEDBACK ***
$app->get('/deleteFeedback/{id}', function(Request $request, Response $response){

	require 'public/include/DbManager.php';
	
	$manager = new DbManager();

	// Get Parameters
	$id = $request->getAttribute('id');

	$data = $manager->deleteFeedback($id);

	//Parameter Invalid
	if($data == "NO_SUCH_ID"){

		return prepareResponse(400, STATUS_BAD_REQUEST, "There is no Such 'id'.", $response);
	}

	if($data != "ERROR"){

		//onSuccess
		return prepareResponse(204, $data, "DELETED", $response);
	}
	else{

		//onFail
		return prepareResponse(400, STATUS_BAD_REQUEST, "Errro While Deleting.", $response);
	}

	
});

$app->run();
?>