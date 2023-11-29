<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate and process the data (you can add more validation)
    
    // For simplicity, let's just print the data for now
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";

    // You can add additional processing logic here (e.g., send email)
} else {
    // Redirect to the form if accessed directly without a POST request
    header("Location: index.html");
    exit();
}
?>
