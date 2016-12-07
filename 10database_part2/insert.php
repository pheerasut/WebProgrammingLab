<?php
include 'conn.php';
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email_address = $_POST['email'];
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$first_name', '$last_name', '$email_address')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br><a href="selectdata.php">show</a>
