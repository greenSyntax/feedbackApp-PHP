<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

function prepareResponse($statusCode, $responseMessage, $responseData, $response){

	$responseObject = array("response_code" => $statusCode, "response_message" => $responseMessage, "response_data" => $responseData);

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


$app->get('/feedback', function (Request $request, Response $response) {
    
    require 'public/include/DbManager.php';

    $db = new DbManager();
    $data = $db->selectAll();

	return prepareResponse(200,"OK", $data, $response);   

});

$app->get('/feedback/{id}', function (Request $request, Response $response) {

	//Request Fields
	$id = $request->getAttribute('id');

	require 'public/include/DbManager.php';

	$manager = new DbManager();
    $data = $manager->selectByid($id);

    return prepareResponse(200,"OK", $data, $response);

});

$app->post('/createFeedback', function(Request $request, Response $response){

	require 'public/include/DbManager.php';

	$manager = new DbManager();

	// Get Parameters
	$user_name = $request->getParsedBody()['user_name'];
	$feedback_text = $request->getParsedBody()['feedback_text'];

	$data = $manager->insertData($user_name, $feedback_text);

	return prepareResponse(201, $data, "", $response);
});

$app->post('/deleteFeedback/{id}', function(Request $request, Response $response){

	require 'public/include/DbManager.php';
	
	$manager = new DbManager();

	// Get Parameters
	$id = $request->getAttribute('id');

	$data = $manager->deleteFeedback($id);

	return prepareResponse(201, $data, "", $response);
});

$app->run();
?>