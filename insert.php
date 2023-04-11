<?php

require_once 'phpqrcode/qrlib.php';


    function generateQRCode($fullName, $studentID, $course, $yearLevel) {
        // Generate QR code
        if (!file_exists('qr_codes/')) {
            mkdir('qr_codes/', 0777, true);
        }
        $qr_data = $fullName . ',' . $studentID . ',' . $course . ',' . $yearLevel;
        $qr_code_image = 'qr_codes/' . $studentID . '.png';
        QRcode::png($qr_data, $qr_code_image);

        return $qr_code_image;
    }

    function saveQRCodeToDB($fullName, $studentID, $course, $yearLevel ,$qr_code_image) {
        // Connect to database
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "dbregister";
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ')'
                . mysqli_connect_error());
        }

        // Store the QR code image path in the database
        $sql = "INSERT INTO tblregister (fullName, studentID, course, yearLevel , qr_image)
                values ('$fullName', '$studentID', '$course', '$yearLevel' ,'$qr_code_image')";
        if ($conn->query($sql)) {
            echo "New record is inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    $fullName = filter_input(INPUT_POST, 'fullName');
    $studentID = filter_input(INPUT_POST, 'studentID');
    $course = filter_input(INPUT_POST, 'course');
    $yearLevel = filter_input(INPUT_POST, 'yearLevel');

    if (empty($fullName)) {
        echo "Fullname should not be empty";
        die();
    }
    if (empty($studentID)) {
        echo "Student ID should not be empty";
        die();
    }
    if (empty($course)) {
        echo "Course should not be empty";
        die();
    }

    if (empty($yearLevel)) {
        echo "Year Level should not be empty";
        die();
    }

    $qr_code_image = generateQRCode($fullName, $studentID, $course, $yearLevel);
    saveQRCodeToDB($fullName, $studentID, $course, $yearLevel ,$qr_code_image);

    header('Location: success.php?studentID=' . $studentID);
    exit;
?>