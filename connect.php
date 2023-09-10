<?php 
    $id_employee = $_POST['id_employee'];
    $name_employee = $_POST['name_employee'];
    $age_employee = $_POST['age_employee'];

    // Database Connection
    $conn = new mysqli('localhost', 'root', '', 'mydb');
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO employee (id_employee, name_employee, age_employee) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $id_employee, $name_employee, $age_employee);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>