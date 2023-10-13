<?php 
  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db_name = "contactform";  
    
  $con = mysqli_connect($host, $user, $password, $db_name);  
  if(mysqli_connect_errno()) {  
      die("Failed to connect with MySQL: ". mysqli_connect_error());  
  }  
$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$sql= "SELECT * FROM register WHERE email='$email' && password='$pass' ";
$result=mysqli_query($con, $sql);
// echo $sql;
if(mysqli_num_rows($result)> 0){
    echo "<script> alert('email id already exist'); </script>";
}
else{
if($pass != $cpass){
echo "<script> alert('password are NOT matched'); </script>";

}
else{
    echo "<script> alert('password are  matched'); </script>";
    $insert="INSERT INTO register(email, password, cpassword) VALUES('$email','$pass','$cpass')";
    mysqli_query($con,$insert);
    header('location:login.php');
    
}
}

?>