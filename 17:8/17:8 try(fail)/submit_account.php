<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $account_type = $_POST["account_type"];
    $initial_deposit = $_POST["initial_deposit"];
    $aadhar_number = $_POST["Aid"];
    
    // File upload handling
    $upload_dir = "uploads/";  // Directory to store uploaded files
    $file_name = $_FILES["id_document"]["name"];
    $file_path = $upload_dir . $file_name;

    // Move the uploaded file to the designated directory
    move_uploaded_file($_FILES["id_document"]["tmp_name"], $file_path);

    // Database operations (You need to implement database connection and insertion logic here)
    // Example: Insert data into a database table
    /*
    $db_connection = mysqli_connect("localhost", "username", "password", "database_name");
    $query = "INSERT INTO accounts (full_name, email, gender, phone, address, dob, account_type, initial_deposit, aadhar_number, id_document) VALUES ('$full_name', '$email', '$gender', '$phone', '$address', '$dob', '$account_type', '$initial_deposit', '$aadhar_number', '$file_path')";
    mysqli_query($db_connection, $query);
    mysqli_close($db_connection);
    */

    // Redirect to the confirmation page
    header("Location: confirmation.html");
    exit();
}
else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle GET requests
    $full_name = $_GET['full_name'];
    $email = $_GET['email'];
    $gender = $_GET['gender'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $dob = $_GET['dob'];
    $account_type = $_GET['account_type'];
    $initial_deposit = $_GET['initial_deposit'];
    $aadhar_number = $_GET['Aid'];
    $file_name = $_GET['id_document'];
    $file_path = $_GET['id_document'];
    
    // Redirect to the confirmation page
    header("Location: confirmation.html");
    exit();
}
?>
