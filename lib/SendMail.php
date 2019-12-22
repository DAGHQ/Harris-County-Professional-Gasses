<?php 
	// Import PHPMailer classes into the global namespace
	// These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	// Load Composer's autoloader
	require 'vendor/autoload.php';

	class SendMail {
		public static function register($to, $sub, $body, $cc = [], $bb = [], $atc = []) {
			// Instantiation and passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                      // Enable verbose debug output
			    $mail->isSMTP();                                            // Send using SMTP
			    $mail->Host       = 'mail.daghq.com';                    // Set the SMTP server to send through
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = 'accounts.daghq.com';                     // SMTP username
			    $mail->Password   = 'Cartarman1';                               // SMTP password
			    $mail->SMTPSecure = "ssl";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
			    $mail->Port       = 25;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('accounts@daghq.com', APP_NAME);

			    if(is_array($to)) {
			    	foreach ($to as $email => $name) {
				    	$mail->addAddress($email, $name);     // Add a recipient
				    }
			    } else {
			    	$mail->addAddress($to);     // Add a recipient
			    }  

			    $mail->addReplyTo('support@daghq.com', APP_NAME . " | Support");

			    if(is_array($bb)) {
			    	foreach($bb as $email) {
			    		$mail->addBCC($email);
			    	}
			    } else {
			    	$mail->addBCC($bb);
			    }

			    if(is_array($cc)) {
			    	foreach($cc as $email) {
			    		$mail->addCC($email);
			    	}
			    } else {
			    	$mail->addCC($cc);
			    }

			    // Attachments
			    if(is_array($atc)) {
			    	foreach($atc as $at) {
			    		$mail->addAttachment($at);         // Add attachments
			    	}
			    } else {
			    	$mail->addAttachment($atc);         // Add attachments
			    }

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = $sub;
			    $mail->Body    = $body;

			    $mail->send();
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}
	}