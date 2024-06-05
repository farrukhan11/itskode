<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  
  // Set up the email parameters
  $to = "your-email@example.com"; // Replace with your desired recipient email address
  $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
  $body = "Name: $name\n" .
    "Email: $email\n" .
    "Phone: $phone\n" .
    "Subject: $subject\n" .
    "Message: $message";

  // Send the email
  $result = mail($to, $subject, $body, $headers);

  if ($result) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
