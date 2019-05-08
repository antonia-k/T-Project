<!-- NICE -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trolltweets";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

  $sql = "SELECT author FROM trolltweets.tweets where language='English' and region='United States' LIMIT 20000";
    $result = $conn->query($sql); 
	
 $data = array();
    
while($row = $result->fetch_assoc()){
    //for ($x = 0; $x < $result->num_rows; $x++) {
        array_push($data, $row["author"]);
    }
}	
    
    echo json_encode($data);
	
?>
<-- jetzt printed er 10*10, i.e. 100 mal den namen, liegt es daran, dass das ergebnis 10 mal der name ist und er das deshalb 10 mal printed?, also 10 mal (10 mal der namen)-->

   if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
			echo "author: ",$row["author"];
		}
	} else {
		echo "0 results";
    }  
