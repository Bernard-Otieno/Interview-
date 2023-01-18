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
    $sql = "SELECT * FROM personal_details";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
?>  
        <tr>
            <td><?=$row['ID'];?></td>
            <td><?=$row['Name'];?></td>
            <td><?=$row['DOB'];?></td>
            <td><?=$row['Sex'];?></td>             
                                                         <!-- printing in table format -->
        
<?php   
    }
    }
    else {
        echo "0 results";
    }
?>

<?php

$sql = "SELECT * FROM contact_details";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {?>
             
            <td><?=$row['po_box'];?></td>
            <td><?=$row['mobile_no'];?></td>
        
<?php   
    }
    }
    else {
        echo "0 results";
    }
    ?>
<?php

$sql = "SELECT * FROM educational_details";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {?>
             
            <td><?=$row['college'];?></td>
            <td><?=$row['degree_course'];?></td>
        </tr>
<?php   
    }
    }
    else {
        echo "0 results";
    }
    mysqli_close($conn);

?>

  