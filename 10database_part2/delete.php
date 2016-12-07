<?php
include 'conn.php';
$sql = "DELETE FROM MyGuests WHERE id='".$_GET["id"]."'";
if(mysqli_query($conn, $sql)){
    echo "Records Remove successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br><a href="selectdata.php">show</a>
