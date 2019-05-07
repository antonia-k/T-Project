<?php
$servername = "localhost";
$username = "root";
$password = "a1i2n3o4t5n6a";
$dbname = "trolltweets";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

  $sql = "SELECT author FROM trolltweets.tweets LIMIT 10";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
			echo $row["author"],", ";
		}
	} else {
		echo "0 results";
    }   
	
	echo json_encode($row["author"]);
     
?>
