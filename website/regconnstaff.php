<?php
$connection = mysqli_connect("localhost", "spark3", "Qkrthf4646");
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$email = $_POST['Email'];
$university = $_POST['University'];
$course = $_POST['Course'];
$gender = $_POST['Gender'];
$password = $_POST['Password'];
//Sends the message to this e-mail
$user="$email";
$Admin="jorogeorgiev765@gmail.com";
//Email will look like this
$AdminEmail= " 
Hi $name $surname,
Your account was created successfuly.
These are your account details:
Name: $name $surname
Email: $email
Please contact us if you have any queuries.
Thank you!";
$db = mysqli_select_db($connection, "spark3");
mysqli_query($connection, "INSERT INTO Register_staff (Name, Surname, Email, University, Course, Gender, Password) VALUES ('$name', '$surname', '$email', '$university', '$course', '$gender', '$password')");
if(mysqli_connect_errno()){
header('location: register1.php');
}else {
header('location: index.php');
$sent_mail=mail($user, "Group Project", $Admin);
}		
?>