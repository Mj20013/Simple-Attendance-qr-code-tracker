<?php
require_once 'phpqrcode/qrlib.php';

$studentID = filter_input(INPUT_GET, 'studentID');

if (empty($studentID)) {
    echo "Student ID should not be empty";
    die();
}

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

// Retrieve the QR code image path from the database
$sql = "SELECT qr_image,fullName FROM tblregister WHERE studentID = '$studentID'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $qr_code_image = $row["qr_image"];
    $fullName = $row["fullName"];
} else {
    echo "No QR code found for student ID " . $studentID;
    die();
}

$conn->close();
?>


<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h2 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      img {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="margin:0 auto;">
        <img src="<?php echo $qr_code_image?>" alt="qr code" width = "150" height = "150">
      </div>
        <h2>Event Registration Success!</h2> 
        <p>You are now registered to the event <b>@<?php echo $fullName?></b>:<br/>Please take a picture of your QR.</p>
        <a href="registers.php"><button style="border-radius:20px; width:100px; height:50px; border:none; background-color: #88B04B; cursor: pointer;">Done!</button></a>
      </div>
    </body>
</html>