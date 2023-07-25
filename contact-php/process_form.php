<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];

    // Compose the form data as a string
    $form_data = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\n\n";

    // Save the form data to a text file (you can adjust the file path as needed)
    $file_path = "form_submissions.txt";
    file_put_contents($file_path, $form_data, FILE_APPEND);

    // Redirect back to the contact page after form submission
    header("Location: contact.html");
    exit;
}
?>

