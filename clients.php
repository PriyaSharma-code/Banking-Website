<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Clients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
balance INT(10) 
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Clients created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql = "INSERT INTO Clients (id, name, email, balance)
VALUES (1, 'Ananya','anaya1@gmail.com', 1000),
VALUES (2, 'Arnav','arnav2033@yahoo.com', 5005),
VALUES (3, 'Hope','hope.life@rediff.com' , 4932),
VALUES (4, 'Riya','riya.rollercoaster@outbox.com ,30000,
VALUES (5, 'Surya', 'suryavanshi@hotmail.com' ,7500),
VALUES (6, 'Tina',' tina.meena@gmail.com' ,4570),
VALUES (7, 'Zyanb','zyanb.life@yahoo.ac.in' ,8400)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>