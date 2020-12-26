<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$rpassword = filter_input(INPUT_POST, 'rpassword');
$pno = filter_input(INPUT_POST, 'pno');
if (!empty($fname)){
if (!empty($lname)){
if (!empty($email)){
if ($password==$rpassword){ 
if (!empty($pno)){  
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "registration";
// Create connection
$conn = new mysqli ("localhost", "root", "", "registration");
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register(fname,lname,email,password,rpassword,pno) values('$fname','lname','$email','$password','$rpassword','$pno')";
if ($conn->query($sql)){
echo "you registered successfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "phone number should not be empty";
die();
}
}
else{
echo "<script type='text/javascript' > alert('password not match');</script>";
die();
}
}
else{
echo "E-mail ID shouldn not be empty";
die();
}
}
else{
echo "Last Name should not be empty";
die();
}
}
else{
echo "First Name  should not be empty";
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