<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Email address where you want to receive the feedback
  $to = "prostolama27@gmail.com";
  $subject = "Feedback from " . $name;
  $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;

  $mail = new PHPMailer();

  try {
    // Configure SMTP settings (replace with your own)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'prostolama27@gmail.com';
    $mail->Password = 'V@yeiby_t27';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Set sender and recipient
    $mail->setFrom($email, $name);
    $mail->addAddress($to);

    // Set email subject and body
    $mail->Subject = $subject;
    $mail->Body = $body;

    // Send email
    if ($mail->send()) {
      echo "Thank you for your feedback!";
    } else {
      echo "Sorry, there was an error sending your feedback.";
    }
  } catch (Exception $e) {
    echo "Sorry, there was an error sending your feedback: " . $mail->ErrorInfo;
  }
}
?>