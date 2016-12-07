<?php
include 'conn.php';
// Attempt select query execution
$sql = "SELECT * FROM MyGuests";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>person_id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email_address</th>";
                echo "<th>operations</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td><a href='updateform.php?id=".$row['id']."'>update</a> | <a href='delete.php?id=".$row['id']."'>delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>
