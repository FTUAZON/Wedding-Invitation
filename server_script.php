<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $to = "fritz123.tuazon08@gmail.com";
    $subject = "Contact Form Submission";
    $message = "Name: $name\nEmail: $email";

    if (mail($to, $subject, $message)) {
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
