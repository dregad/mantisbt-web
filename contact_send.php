<?php
	# Recaptcha setup
	require_once( 'lib' . DIRECTORY_SEPARATOR . 'recaptcha' . DIRECTORY_SEPARATOR . 'recaptchalib.php' );

	include( 'config_defaults_inc.php' );

	$t_resp = recaptcha_check_answer (
		$t_recaptcha_private_key,
		$_SERVER["REMOTE_ADDR"],
		$_POST["recaptcha_challenge_field"],
		$_POST["recaptcha_response_field"]);

	if( !$t_resp->is_valid ) {
		// What happens when the CAPTCHA was entered incorrectly
		die(
			"The reCAPTCHA wasn't entered correctly. Go back and try it again." .
			"(reCAPTCHA said: " . $t_resp->error . ")"
		);
	} else {
		// Your code here to handle a successful verification
	}
