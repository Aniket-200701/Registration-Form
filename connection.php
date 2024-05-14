<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $input_username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Create connection
    $server = "localhost";
    $db_username = "root"; // Rename this variable to avoid conflict
    $db_password = "";
    $dbname = "registrationform";
    $con = new mysqli($server, $db_username, $db_password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare the statement with placeholders
    $stmt = $con->prepare("INSERT INTO `registrationform` (`username`, `email`, `password`) VALUES ('$input_username','$email','$password')");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($con->error));
    }

    // Bind parameters
   // $stmt->bind_param('sss', $input_username, $email, $hashed_password);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "User registered successfully.<br>";
        echo "<a href='generate_pdf.php?username=$input_username&email=$email&password=$password' target='_blank'>Generate PDF</a>";

    } else {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }

    // Close statement
    $stmt->close();
    
    // Close connection
    $con->close();
}
?>
