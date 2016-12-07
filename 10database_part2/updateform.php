<?php
include 'conn.php';
$sql = "SELECT * FROM MyGuests where id='".$_GET["id"]."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<form action="updateprocess.php" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstname" id="firstName" value="<?php echo $row['firstname']; ?>">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastname" id="lastName" value="<?php echo $row['lastname'];?>">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress" value="<?php echo $row['email'];?>">
    </p>
        <input type="hidden" name="id" id="id" value="<?php echo $_GET["id"];?>">
    <input type="submit" value="Submit">
</form>
