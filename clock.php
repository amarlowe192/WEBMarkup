<?php
$servername = ""
$username = "<>"
$password = "<>"
$dbname = "<>"


$conn = new mysqli();
if($conn->connect_error){

die("Connection failed: " . $conn->connect_error);
}

echo "Connected Successfully."

$sql = "CREATE DATABASE Students";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}



$sql = "CREATE TABLE Students (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(1) NOT NULL,
lastname VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$conn->close();


$sql = "CREATE DATABASE TStamp";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql = "CREATE TABLE TStamp (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$conn->close();


$sql = "SELECT distinct(), date_format(sdate, '%b') as smonth, date_format(sdate, '%D') as sday FROM 'p4c-clock' WHERE sdate > CURRENT_DATE order by sdate ";
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