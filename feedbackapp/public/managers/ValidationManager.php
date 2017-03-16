<?php

class ValidationManager{

	//Genrate Password Hash
	static function encryptPassword($password){

		$hash = md5($password);
		return $hash;
	}


	// Validate /CreateAPI
	static function isValidateForCreateFeedback($userName, $feedbackText, $userEmail){

		$error[] = array();

		if($userName == null){

			array_push($error, "User Name");
		}

		if($feedbackText == null){

			array_push($error, "Feedback Text");
		}

		if($userEmail == null){

			array_push($error, "Email");
		}

		return $error;
}

?>