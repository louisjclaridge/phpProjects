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
//Creating a SQL query 
$sql = "SELECT * FROM test";
//Executing the SQL query based on the previously defined connection and query
$result = mysqli_query($conn, $sql);


//Iterating through each row of the result and outputing the contents of that row
while($row = mysqli_fetch_assoc($result))
{
   echo "id: " . $row["userID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
}



//closing the connection
mysqli_close($conn);
?>
