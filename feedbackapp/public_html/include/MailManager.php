<?php

class MailManager{

	private $mail;

	function __construct(){

		require_once 'libs/PHPMailer/PHPMailerAutoload.php';
		require_once 'Constants.php';

		$this->mail = new PHPMailer();
		
		$this->mail->isSMTP();
		// $this->mail->SMTPDebug = 1;
		$this->mail->Host = SMTP_HOST_NAME;
		$this->mail->SMTPAuth = true;
		$this->mail->Username = SMTP_EMAIL;
		$this->mail->Password = SMTP_PASSWORD;
		$this->mail->SMTPSecure = 'SSL';
		$this->mail->Port = SMTP_PORT;

	}

	function SendMail($to, $subject, $body){

		$this->mail->setFrom(SMTP_EMAIL, "Support");
		//$this->mail->addCC(CC_EMAIL);
		//$this->mail->addBcc(LOG_EMAIL);
		$this->mail->addAddress($to);
		$this->mail->Body = $body;
		$this->mail->Subject = $subject;
		$this->mail->isHTML(true);


		if(!$this->mail->send()){

			// Couldn't Sent Mail
			//echo $this->mail->ErrorInfo;
			return SMTP_ERROR_WHILE_SENDING;
		}
		else{
			//Sent Successfully
			return SMTP_SUCCESS;
		}
	}	
}

?>