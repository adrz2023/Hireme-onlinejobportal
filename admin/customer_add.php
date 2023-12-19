<?php
$host = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=job", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$response = array('success' => false);

if (
    isset($_POST['email']) && $_POST['email'] != '' &&
    isset($_POST['username']) && $_POST['username'] != '' &&
    isset($_POST['password']) && $_POST['password'] != '' &&
    isset($_POST['firstname']) && $_POST['firstname'] != '' &&
    isset($_POST['lastname']) && $_POST['lastname'] != '' &&
    isset($_POST['admintype']) && $_POST['admintype'] != ''
) {
    $sql = "INSERT INTO admin_login(admin_email, admin_pass, admin_username, first_name, last_name, admin_type) 
    VALUES(
    '" . addslashes($_POST['email']) . "', 
    '" . addslashes($_POST['password']) . "',
    '" . addslashes($_POST['username']) . "',
    '" . addslashes($_POST['firstname']) . "',
    '" . addslashes($_POST['lastname']) . "',
    '" . addslashes($_POST['admintype']) . "')";

    if ($conn->query($sql)) {
        $response['success'] = true;
    }
}

echo json_encode($response);
