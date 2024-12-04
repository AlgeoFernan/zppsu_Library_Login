<?php
require_once  "../include/config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $full_name = $_POST["full_name"];
    $course = $_POST["course"];
    $department = $_POST["department"];

    try {
        if($pdo == null){
            echo "error";
        }else{
            $query = "INSERT INTO login_info (full_name, course, department) VALUES (:full_name, :course, :department)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":full_name", $full_name);
            $stmt->bindParam(":course", $course);
            $stmt->bindParam(":department", $department);
            $stmt->execute();
            
            header("Location: ../index.php?success=login");

            $stmt = null;
            $pdo = null;

            
            die();
        }
            
    } catch (PDOException $e) {
        die("fatal error pakaw: " . $e->getMessage());
    }
    
}else{
    header("Location: ../index.php");
    die();
}