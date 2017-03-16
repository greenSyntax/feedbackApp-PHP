<?php

class Deployment{

	static $mode = "STAGING";
	//static $mode = "PRODUCTION";
}


if(Deployment::$mode == "STAGING"){

// Local Credentials
define("DB_HOST_NAME","localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD","");
define("DB_NAME", "db_feedbackapp");
}

else if(Deployment::$mode == "PRODUCTION"){

// Production Credentials
define("DB_HOST_NAME","localhost");
define("DB_USERNAME", "greensyn_admin");
define("DB_PASSWORD","Admin@9876");
define("DB_NAME", "greensyn_db");
}

//Schema Definations
define("TBL_FEEDBACK", "tbl_feedback");
define("TBL_USERS", "tbl_users");

?>