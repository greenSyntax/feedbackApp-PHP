<?php

class Feedback{

	$name_of_user;
	$feedback_message;

	function __constuct($name_of_user, $feedback_message){

		$this->$name_of_user = $name_of_user;
		$this->feedback_message = $feedback_message;

	}

}

?>