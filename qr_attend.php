<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="dbregister";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection Failed" .$conn->connect_error);
    }

    if(isset($_POST['fullName'])){
        
        $fullName = $_POST['fullName'];
        $studentID = $_POST['studentID'];
        $course = $_POST['course'];
        $yearLevel = $_POST['yearLevel'];

        $sql ="INSERT INTO tblattendance(fullName, studentID, course, yearLevel, TimeIn) 
        VALUES(?, ?, ?, ?, NOW())";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $fullName, $studentID, $course, $yearLevel);

        if($stmt->execute()){
        header("Location:registered.php");
        }else{
            echo "Error : " .$sql ."<br>".$conn->error;
        }
    }
    $conn->close();
?>