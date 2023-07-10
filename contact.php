<?php
		//get data from form  
		$email= $_POST['email'];
		$message= $_POST['subject'];
        //$email_doctor = $_POST['email'];
		
		$to = "admanehocine05@gmail.com";//win tb3ti email
		$subject = "EMAIL";//object de l email
		$txt =$message;//subject

		$headers = "From:" . $email . "\r\n";
		$headers .= "Cc: mhdmnina@gmail.com\r\n"; // Add the CCI recipient(s) here

	

		if ($email != NULL) {
            if (mail($to, $subject, $txt, $headers)) {
                $message = "Email envoyé avec succée";
                echo $message;
            } else {
                $erreur = "Échec de l'envoi de l'email";
                echo $erreur;
            }
        } else {
            $erreur = "Email non envoyé";
            echo $erreur;
}
 






?>
