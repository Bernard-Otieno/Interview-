<?php

//connnecting the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_query";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$dob =mysqli_real_escape_string($conn, $_REQUEST['dob']);
$sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
$college = mysqli_real_escape_string($conn, $_REQUEST['college']);
$course = mysqli_real_escape_string($conn, $_REQUEST['degree']);
$number=mysqli_real_escape_string($conn, $_REQUEST['number']);
$poBox = mysqli_real_escape_string($conn, $_REQUEST['poBox']);



  $sql1 = "INSERT INTO personal_details (Name,DOB,Sex) VALUES ('$name','$dob','$sex')";
  if(mysqli_query($conn, $sql1)){
            echo "Success!";
        } else{
            echo "ERROR: Could not able to execute $sql1. " . mysqli_error($sql1);
        }

  $sql2 = "INSERT INTO educational_details (degree_course,college) VALUES ('$college','$course')";
   if(mysqli_query($conn, $sql2)){
            echo "Success!";
        } else{
            echo "ERROR: Could not able to execute $sql2. " . mysqli_error($sql2);
        }


    $sql3 = "INSERT INTO contact_details (po_box, mobile_no) VALUES ('$poBox','$number')";
    if(mysqli_query($conn, $sql3)){
            header('location:AJAX_form.php');
            echo "Success!";
        } else{
            echo "ERROR: Could not able to execute $sql3. " . mysqli_error($sql3);
        }

?>