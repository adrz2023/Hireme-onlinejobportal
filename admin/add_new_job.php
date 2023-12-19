<?php
$host = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=all_jobs", $job_title, $des);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$response = array('success' => false);

if (
    isset($_POST['email']) && $_POST['email'] != '' &&
    isset($_POST['job_title']) && $_POST['job_title'] != '' &&
    isset($_POST['des']) && $_POST['des'] != '' &&
    isset($_POST['country']) && $_POST['country'] != '' &&
    isset($_POST['city']) && $_POST['city'] != '' &&
    isset($_POST['state']) && $_POST['state'] != ''
) {
    $sql = "INSERT INTO all_jobs(customer_email, job_title, des, country, city,state ) 
    VALUES(
    '" . addslashes($_POST['customer_email']) . "', 
    '" . addslashes($_POST['job_title']) . "',
    '" . addslashes($_POST['des']) . "',
    '" . addslashes($_POST['country']) . "',
    '" . addslashes($_POST['city']) . "',
    '" . addslashes($_POST['state']) . "')";

    if ($conn->query($sql)) {
        $response['success'] = true;
    }
}

echo json_encode($response);