<?php
// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $teamName = htmlspecialchars($_POST['Teamname']);
    $captainName = htmlspecialchars($_POST['Captainname']);
    $phone = htmlspecialchars($_POST['Phone']);
    $email = htmlspecialchars($_POST['Email']);

    // File upload
    $uploadDir = 'uploads/';
    $teamLogo = $uploadDir . basename($_FILES['Teamlogo']['name']);
    $captainPhoto = $uploadDir . basename($_FILES['Captainphoto']['name']);
    $uploadOk = 1;

    // Check if the uploads directory exists, if not, create it
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Check file type and size
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($_FILES['Teamlogo']['type'], $allowedTypes) || !in_array($_FILES['Captainphoto']['type'], $allowedTypes)) {
        $uploadOk = 0;
        echo "Only JPEG, PNG, and GIF files are allowed.";
    }
    if ($_FILES['Teamlogo']['size'] > 5000000 || $_FILES['Captainphoto']['size'] > 5000000) {
        $uploadOk = 0;
        echo "Sorry, your file is too large.";
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES['Teamlogo']['tmp_name'], $teamLogo) && move_uploaded_file($_FILES['Captainphoto']['tmp_name'], $captainPhoto)) {
            // Create a new PHPMailer instance
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // SMTP server
                $mail->SMTPAuth = true;
				$mail->Username = 'rafiqyatooumer@gmail.com'; // Your Gmail address
				$mail->Password = 'exbqphnmrewgaeot'; // Your Gmail app password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Recipients
                $mail->setFrom('no-reply@yourdomain.com', 'Registration');
                $mail->addAddress('rafiqyatooumer@gmail.com'); // Add a recipient
                $mail->addReplyTo($email, $captainName);

                // Content
                $mail->isHTML(false);
                $mail->Subject = 'New Team Registration';
                $mail->Body = "Team Name: $teamName\nCaptain Name: $captainName\nPhone: $phone\nEmail: $email\n";

                // Attachments
                $mail->addAttachment($teamLogo);
                $mail->addAttachment($captainPhoto);

                // Send the email
                $mail->send();
                echo "                      
				
				
				                Registration successful. Thank you!";
            } catch (Exception $e) {
                echo "There was an error sending your registration. Please try again. Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Sorry, there was an error uploading your files.";
        }
    }
} else {
    echo "                               
	
	
	                              Invalid request method.";
}
?>