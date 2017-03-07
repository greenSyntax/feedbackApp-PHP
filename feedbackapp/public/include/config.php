<?php

class Mode{

	static $mode = "STAGING";
	//static $mode = "PRODUCTION";
}


if(Mode::$mode){

// Local Credentials
define("DB_HOST_NAME","localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD","");

}
else{

// Local Credentials
define("DB_HOST_NAME","localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD","");

}


//Production Credentials

//Schema Definations
define("DB_NAME", "db_feedbackapp");
define("TBL_FEEDBACK", "tbl_feedback");

?>