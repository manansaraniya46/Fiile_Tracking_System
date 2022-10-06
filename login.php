<?php

$email = $_POST['email'];
$password =$_POST['password'];

$conn=new mysqli("localhost", "root","","users");

if($conn->connect_error)
{
        die("Connection Faild".$conn->connect_error);
}
else
{
    $stmt =$conn->prepare(" select * from register where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password)
        {
            echo "<h2> <center> Login Successfully </h2>";
            header('refresh:3; url=http://localhost/FTS/index.html');
        }
        else
        {
            echo "<h2> <center> Invalid Email Or Password </h2>";
        }
    }
    else
    {
        echo "<h2> <center> Invalid Email or Password </h2>";
    }
}

   
?>
