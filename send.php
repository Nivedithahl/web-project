<?php
$fullname = filter_input(INPUT_POST, 'fullname');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');
if (!empty($fullname)){
if (!empty($email)){
if (!empty($message)){
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
$sql = "INSERT INTO send(fullname,email,message)values('$fullname','$email','$message')";
if ($conn->query($sql)){
echo "Your message send sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "message should not be empty";
die();
}
}
else{
echo "Email-id should not be empty";
die();
}
}
else{
echo "fullname should not be empty";
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