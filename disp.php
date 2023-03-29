<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","bgmi");
$sql="SELECT*FROM bgm";
$result=mysqli_query($conn,$sql);
?>
<table border="2" align="center" style="padding:15px" >
    <th>NAME</th>
    <th></th>
    <th>REGNO</th>
    <th></th>
    <th>PASSWORD`</th>
    <th></th>
    <th>PHONENO</th>
    <th></th>
    <th>EMAIL</th>
    <th></th>
    <th>DOB</th>
    <th></th>
    <th>GENDER</th>
    <th></th>
    <th>CITY</th>
    <th></th>
    <th>VOTES</th>
    <th></th>
    <th>COMMENTS</th>
    <th></th>
    <th>OPERATION</th>
<?php
while($res=mysqli_fetch_array($result))
{
    echo'<tr>';
    echo'<td>'.$res['name'].'<td>';
    echo'<td>'.$res['regno'].'<td>';
    echo'<td>'.$res['password'].'<td>';
    echo'<td>'.$res['phoneno'].'<td>';
    echo'<td>'.$res['email'].'<td>';
    echo'<td>'.$res['dob'].'<td>';
    echo'<td>'.$res['gender'].'<td>';
    echo'<td>'.$res['city'].'<td>';
    echo'<td>'.$res['votes'].'<td>';
    echo'<td>'.$res['comments'].'<td>';
    echo'<td><button><a href="delete.php">delete</a></button>';
    echo'</tr>';
}
?>
</table>
<center><button><a href="index.html">goback</a></button></center>

    
</body>
</html>
