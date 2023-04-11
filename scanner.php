<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href=".css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="">
</head>
<style>
  body {
    background-size: cover;
    background-image: url('');

  }

  label {
    text-decoration: solid;
  }

  .col-sm-3 {
    text-align: center;

  }

  .btn {
    background-color: seagreen;
    color: white;
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
    padding: 10px 25px;
    transition: transform .4s;
    box-shadow: 5px 5px 5px;
  }

  .btn:hover {
    transform: scale(1.0);
  }

  input:hover {
    color: seagreen;
  }

  .box {
    background-image: url('C.jpg');
    background-size: cover;
    box-shadow: 5px 5px 5px;
    width: 400px;
    height: 400px;
    margin-left: 440px;
    margin-top: 30px;
    padding: 2%;
  }
</style>

<body class="">
  <div>
 
  </div>
  <div class="box">
    <center>
      <form action="insert.php" method="post">
        <h1>STUDENT REGISTRATION FORM</h1>

        <label for="fullName">Full Name: </label>
        <input type="text" name="fullName" id="fullName" placeholder="Enter Full Name" required><br><br>

        <label for="studentID">Student ID: </label>
        <input type="text" name="studentID" id="studentID" placeholder="Enter Student ID" required><br><br>

        <label for="course">Course: </label>
        <input type="text" name="course" id="course" placeholder="Enter Student Course" required><br><br>

        <label for="yearLevel">Year Level: </label>
        <input type="text" name="yearLevel" id="yearLevel" placeholder="Enter Year Level" required><br><br>

        <button name="signup" id="register" class="btn btn-primary">GENERATE QR CODE</button>
      </form>
      </div>
    </center>
  </div>

  </script>
</body>

</html>