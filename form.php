<!DOCTYPE html>
<html>
<head>
    <title>Report Abduction Form</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $ask = htmlspecialchars($_POST['ask']);
    $description = htmlspecialchars($_POST['description']);
    $aliens = htmlspecialchars($_POST['aliens']);
    $comments = htmlspecialchars($_POST['comments']);

    $to = 'palakonddeepika25@gmail.com'; // corrected email
    $subject = 'Abduction Report';
    $msg = "Abduction Report:\n\n" .
           "First Name: $firstname\n" .
           "Last Name: $lastname\n" .
           "Email: $email\n" .
           "Have you seen my puppy: $ask\n" .
           "Description: $description\n" .
           "Number of Aliens: $aliens\n" .
           "Comments: $comments\n";
$headers = "From: palakondadeepika11@gmail.com\r\n";
$headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $msg)) {
        echo "<h2>Form Submitted Successfully</h2>";
    } else {
        echo "<h2>Failed to send email.</h2>";
    }

    echo "<p><strong>First Name:</strong> $firstname</p>";
    echo "<p><strong>Last Name:</strong> $lastname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Have you seen my puppy:</strong> $ask</p>";
    echo "<p><strong>Description:</strong> $description</p>";
    echo "<p><strong>Number of Aliens:</strong> $aliens</p>";
    echo "<p><strong>Comments:</strong> $comments</p>";
} else {
    echo "<h2>Form Not Submitted</h2>";
}
?>
</body>
</html>
