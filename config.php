<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	

	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("625688622921-6h58m4iojjrsdh4a765san5hqv870b4p.apps.googleusercontent.com");
	$gClient->setClientSecret("cCmyAUfpZ5buisUOg05cftQU");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/AWTAssignment/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email ");


 ?>