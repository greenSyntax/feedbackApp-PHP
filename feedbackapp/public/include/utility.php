<?php

class Utility{


	// Formart Escape Charcters
	static function getFormattedText($passedText){

		$passedText = trim($passedText);
  		$passedText = stripslashes($passedText);
  		$passedText = htmlspecialchars($passedText);
  		
  		return $passedText;
	}
}

?>