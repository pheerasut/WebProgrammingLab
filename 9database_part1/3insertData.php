<?php
include ("connection2.php");
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Donald', 'Trump', 'donald@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
