<?php
$first_name=$last_name=$email=$mob = "";
$dbc = mysqli_connect('localhost', 'root', 'Karma1680', 'elmer_store')
or die('Error connecting to MySQL server');

$first_name = $_POST['firstname'];
$last_name = $_POST['secondname'];
$email = $_POST['email'];
$mob = $_POST['mobile'];

$query = "INSERT INTO email_list(first_name,last_name,email,mobile_number)".
"VALUES('$first_name', '$last_name', '$email', '$mob')";

$result=mysqli_query($dbc, $query);
if(!$result ){
	echo mysqli_error($dbc);
}else if($result == 'true'){
	echo 'succesful entering into your database.see u again';
}

mysqli_close($dbc);
?>