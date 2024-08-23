<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if(empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
    } else {
        $to = "admin@example.com";
        $subject = "New Contact Message from $name";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        $headers = "From: noreply@example.com" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        mail($to, $subject, $body, $headers);
        echo "Thank you for contacting us!";
    }
} else {
    echo "Error: Invalid request.";
}
?>