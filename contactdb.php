<?php
$con=mysqli_connect('localhost','root','');
if($con)
{
    echo"your database successfully connect";

}
else{
    echo"your database is not successfully connect";
}
 mysqli_select_db($con,'contactform');
 $name=$_POST['user'];
$last=$_POST['last'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$citys=$_POST['citys'];
 $date=$_POST['date'];
$dates=$_POST['dates'];
$people=$_POST['people'];
$text=$_POST['text'];
 $query="INSERT INTO `contact`(`id`, `user`, `last`, `email`, `mobile`, `city`, `citys`, `date`, `dates`, `people`, `text`) VALUES ('','$name','$last','$email','$mobile','$city','$citys','$date','$dates','$people','$text')";
 mysqli_query($con,$query);
 if( $query){
 echo"<script> alert('successfully submitted'); </script>";
 header('location:index.php');
 // echo"$query";
}
else{
    echo"<script> alert(' not successfully submitted'); </script>";
    header('location:contact.php');
    // echo"$query";
}

?>