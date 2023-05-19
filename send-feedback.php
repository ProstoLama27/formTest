<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Email address where you want to receive the feedback
  $to = "your-email@example.com";
  $subject = "Feedback from " . $name;
  $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;

  // Send email
  if (mail($to, $subject, $body)) {
    echo "Thank you for your feedback!";
  } else {
    echo "Sorry, there was an error sending your feedback.";
  }
}
?>