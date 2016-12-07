<?php
include 'conn.php';
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email_address = $_POST['email'];
$sql = "UPDATE MyGuests SET firstname='$first_name', lastname='$last_name', email='$email_address' WHERE id='".$_POST["id"]."'";
if(mysqli_query($conn, $sql)){
    echo "Records Update successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br><a href="selectdata.php">show</a>
