<?php 
if (isset($_POST['sign'])){
    $email = $_POST['email'];
    $username  = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
$sql = "SELECT * FROM cle_s WHERE email= '$email' ";

$rs = $connect->query($sql);
if(empty($email)||empty($fullname)||empty($username)||empty($password))
{
  $error_sign = ' <div style = "" class ="border-red">  field is empty!!</div>';
}
else
if(mysqli_num_rows($rs)>0)
{
  
  $error_sign = "  <div class ='border-red'> $email ? This email is Used!!</div>";
}
else
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

  $error_sign = "<div class ='border-red'> $email ? This email is invalid!!</div>";
}}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>