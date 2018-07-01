<?php
$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$module = $_POST['user_module'];
$number = $_POST['number'];
$email = $_POST['user_email'];
// Create connection
$conn = new mysqli('localhost', 'spark3', 'Qkrthf4646', 'spark3');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO Staffrequest (`First name`, `Last name`, Module, `Number of Student`, Email)
VALUES ('$name', '$surname', '$module', '$number', '$email')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
if(mysqli_connect_errno()){
header('location: STAFF_REQUEST1.php');
}else {
header('location: STAFF_LOGIN.php');
}		
?>