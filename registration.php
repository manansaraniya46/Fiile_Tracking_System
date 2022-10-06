<?php

$servername="localhost";
$username="root";
$password="";
$dbname="users";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
        die("Connection Fail");
}

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO `register` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`) VALUES (NULL, '$firstname', '$lastname', '$gender', '$email', '$password')";

if($conn->query($sql)==true)
{
        echo "<h2> <center> Your Account Is Registered </h2> ";
}
else
{
    echo "<h2> <center> error </h2>";
}

$conn->close();

?>