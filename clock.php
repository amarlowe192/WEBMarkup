<?php
$servername = "localhost";
$username = "<p4cweb>";
$password = "<p4c-clock>";
$dbname = "<p4c-clock>";


$conn = new mysqli();
if($conn->connect_error){

die("Connection failed: " . $conn->connect_error);
}

echo "Connected Successfully.";


$conn->close();





$sql = "SELECT date_format(sdate, '%b') as smonth, date_format(sdate, '%D') as sday FROM 'p4c-clock' WHERE sdate > CURRENT_DATE order by sdate ";
$result = $conn->query($sql);


if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

echo "<p . $row['smonth'] . " " . $row['sday']. " " - " . $row['name']. " </p>";
}
}else{

echo "0 results";
  }
$conn->close();

$sql = "INSERT INTO TStamp ()";
if($conn->query($sql)=== TRUE){

echo "New Record created successfully";
}
else{

echo "Error " . $sql . "<br>" . $conn-->error;

}
$conn->close();

?>