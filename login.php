<?php
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($email)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login";
// Create connection
$conn = new mysqli ("localhost", "root", "", "login");
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO log(email,password)values('$email','$password')";
if ($conn->query($sql)){
echo "Your login sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "password should not be empty";
die();
}
}
else{
echo "Email-id should not be empty";
die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br><button type="button"><a href="Home1.html">ok</a></button>
</form>
</body>
</html>