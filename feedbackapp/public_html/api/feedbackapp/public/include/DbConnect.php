	<?php

	class DbConnect{

	//Private Fields
	private $conn;

	function __construct(){

	}

	//Database Connection
	function connect(){

	require_once('config.php');

	$conn = new mysqli(DB_HOST_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        echo "Connected successfully";

	return $conn;
	}

	}

	?>