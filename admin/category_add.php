<?php
$host = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=job",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$response = array('success' => false);

if (
    
    isset($_POST['category']) && $_POST['category'] != '' &&
    isset($_POST['des']) && $_POST['des'] != ''
) {
    $sql = "INSERT INTO job_category(category,des) 
    VALUES(
    
    '" . addslashes($_POST['category']) . "',
    '" . addslashes($_POST['des']) . "')";

    if ($conn->query($sql)) {
        $response['success'] = true;
    }
}

echo json_encode($response);