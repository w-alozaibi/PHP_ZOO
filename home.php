<?php
$servername = "";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE Zoo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Shark VARCHAR(250),
Elephant VARCHAR(250),
hodge VARCHAR(250),
Tiger VARCHAR(250),
Car VARCHAR(250),
Dog VARCHAR(250),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$sql = "INSERT INTO Zoo (Shark, Elephant, Hodge, Tiger, Car,Dog)
VALUES ('Shark', 'Elephant', 'Hodge','Tiger', 'Car', 'Dog')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>