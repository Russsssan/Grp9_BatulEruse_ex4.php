<?php
// Initialize variables for the form data
$username = '';
$email = '';
$password = '';

// Check if the form was submitted using GET
if (isset($_GET['submit_get'])) {
    $username = htmlspecialchars($_GET['username']);
    $email = htmlspecialchars($_GET['email']);
    $password = htmlspecialchars($_GET['password']); // Don't display the password directly in real applications

    echo "<h2>Form Submitted via GET</h2>";
    echo "<p><strong>Username:</strong> $username</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> " . str_repeat('*', strlen($password)) . "</p>";
    echo '<a href="form.php">Go Back</a>';
}

// Check if the form was submitted using POST
if (isset($_POST['submit_post'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); // Don't display the password directly in real applications

    echo "<h2>Form Submitted via POST</h2>";
    echo "<p><strong>Username:</strong> $username</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> " . str_repeat('*', strlen($password)) . "</p>";
    echo '<a href="form.php">Go Back</a>';
}
?>
