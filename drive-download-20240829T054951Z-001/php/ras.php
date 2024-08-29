<?php
$j=$_POST['name'];
$d=$_POST['email'];
$s=$_POST['message'];
$jd=mysqli_connect("localhost","root","","jagatheesh");
$dj="INSERT INTO contact (name,email,message) values('$j','$d','$s')";
$js=mysqli_query($jd,$dj);
if ($js){
    echo "Message Send Successfully";
    }
    else{
        echo "Failed Try Again Later";
}
?>