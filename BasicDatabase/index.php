<form>
<input type="text" name="firstname">
<input type="text" name="lastname">
<input type="submit">	
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "testDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $db );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM test";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["userID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>