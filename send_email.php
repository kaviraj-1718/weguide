<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contactNo = $_POST["contactNo"];
    $message = $_POST["message"];
    
    $to = "lithikarajkumar@gmail.com";  // Replace with your email address
    $subject = "Contact Us Form Submission from $name";
    $headers = "From: $email";
    
    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Contact Number: $contactNo\n\n";
    $mailBody .= "Message:\n$message";
    
    mail($to, $subject, $mailBody, $headers);
}
?>
