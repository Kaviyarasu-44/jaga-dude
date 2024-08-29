<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$connect=mysqli_connect("localhost","root","","Jagatheesh");

$value="INSERT INTO portfolio(name,email,message)values('$name','$email','$message')";

$result=mysqli_query($connect,$value);

if($result){
    echo "Message Send Successfully";
}
else{
echo " Message Not Send!";
}
 





?>