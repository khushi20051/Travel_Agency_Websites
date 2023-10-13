<?php
session_start();
$conn=mysqli_connect('localhost','root',);
mysqli_select_db($conn,'myaccounts');
    @$email=$_POST["email"];
    @$password=$_POST["password"];
    $sub=mysqli_query($conn,"SELECT * FROM myaccountss WHERE email='$email' ");
    $row=mysqli_fetch_assoc($sub);
if(mysqli_num_rows($sub)>0)
{
   if($password == $row["password"])
   {
       $_SESSION["login"]=true;
    //    $_SESSION["id"]= row["id"];
    echo"<script> alert('successfully login'); </script>";

      
}
else{
    echo"<script> alert('password wrong'); </script>";
}
}
header('location:index.php');

?>