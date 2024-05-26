<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Get form data
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   // Set recipient email address
   $to = 'maxshopk@gmail.com';

   // Set email subject and body
   $subject = 'New Contact Form Submission: ' . $subject;
   $body = "Name: $name\n";
   $body .= "Email: $email\n";
   $body .= "Message: $message";

   // Set headers
   $headers = "From: $name <$email>\r\n";
   $headers .= "Reply-To: $email\r\n";

   // Send email
   $success = mail($to, $subject, $body, $headers);

   // Return success or error response
   if ($success) {
      echo 'success';
   } else {
      echo 'error';
   }
}
?>
