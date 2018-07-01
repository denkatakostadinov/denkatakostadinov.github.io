<?php
$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$uni = $_POST['user_uni'];
$email = $_POST['user_email'];
$module = $_POST['user_module'];
$training = $_POST['user_info'];
$con = new mysqli('localhost', 'spark3', 'Qkrthf4646', 'spark3');
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
} 
$sql = "INSERT INTO Studentapplication (Firstname, Lastname, University, Email, Module, Trained)
VALUES ('$name', '$surname', '$uni', '$email', '$module', '$training')";
if ($con->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
if(mysqli_connect_errno()){
header('location: STAFF_REQUEST.php');
}else {
header('location: index.php');
}		
?>



