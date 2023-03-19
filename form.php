<?php
$name=$_POST["name"];
$regno=$_POST["regno"];
$password=$_POST["password"];
$phoneno=$_POST["phoneno"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$city=$_POST["city"];
$votes=$_POST["votes"];
$comments=$_POST["comments"];
$conn=mysqli_connect("localhost","root","","bgmi");
$sqli="INSERT INTO bgm(name,regno,password,phoneno,email,dob,gender,city,votes,comments)values('$name','$regno','$password','$phoneno','$email','$dob','$gender','$city','$votes','$comments')";
$r=mysqli_query($conn,$sqli);
if($r)
{
    echo"submitted";
}
else
{
    echo"failed";
}
echo'<center><button><a href="index.html">go back</a></button></center>';