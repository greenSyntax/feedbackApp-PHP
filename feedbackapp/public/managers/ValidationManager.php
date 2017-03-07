<?php

class ValidationManager{


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