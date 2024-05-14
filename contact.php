<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the raw POST data
    $data = file_get_contents("php://input");
    // Decode the JSON data into an associative array
    $formData = json_decode($data, true);

    // Extract form data
    $name = $formData['name'];
    $email = $formData['email'];
    $message = $formData['message'];

    // Send email
    $to = "steven.rogers.me@gmail.com"; // Change this to the recipient's email address
    $subject = "New Contact Form Submission";
    $body = "Name" . $name . "Email" . $email . "Message" . $message;

    if (mail($to, $subject, $body)) {
        // Email sent successfully
        http_response_code(200);
        echo "Message sent successfully";
    } else {
        // Error sending email
        http_response_code(500);
        echo "Error sending message";
    }
} else {
    // Invalid request method
    http_response_code(405);
    echo "Method Not Allowed";
}