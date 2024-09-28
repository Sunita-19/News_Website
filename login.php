<?php
// Establish a database connection (same as in register.php)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];

    // You should retrieve the user's hashed password from the database
    // For example: $hashedPassword = retrieveHashedPassword($email);

    // You should verify the password securely using password_verify()
    // For example: if (password_verify($password, $hashedPassword)) { /* Login successful */ }

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo "Login successful!";
    } else {
        echo "Login failed. Check your credentials.";
    }
}

$conn->close();
?>
