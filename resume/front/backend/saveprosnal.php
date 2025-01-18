<?php
require "dbcon.php";
echo "save";
if (isset($_POST["save"])) {
    
$fname=$_POST["fname"];
$faname=$_POST["faname"];
$bdate=$_POST["bdate"];
echo "save";
$add=$_POST["add"];
$gen=$_POST["gen"];
$nation=$_POST["nation"];
$cat=$_POST["cat"];
$mar=$_POST["mar"];
$hon=$_POST["hob"];
$num=$_POST["num"];
$mel=$_POST["mel"];
$flang=$_POST["flang"];
$slang=$_POST["slang"];
$tlang=$_POST["tlang"];
$files=$_FILES["file"];
    $filename =$files['name'];
    $fileerror=$files['error'];
    $filetemp =$files['tmp_name'];
    $fileext=explode('.',$filename);
    $filecheck =strtolower(end($fileext));
    $fileextstored=array('png','jpg','jpeg');
    if (in_array($filecheck,$fileextstored)) {
        $destinationfile='./img/'.$filename;
        move_uploaded_file($filetemp,$destinationfile);

$sql="insert into prosnalinfo(fullname,socialmedia,birthdate,address,gender,nation,categry,maritail,hobbies,number,email,language1,language2,language3,image)values('$fname','$faname','$bdate','$add','$gen','$nation','$cat','$mar','$hon','$num','$mel','$flang','$slang','$tlang','$filename')";
mysqli_query($con,$sql);
echo "save";
mysqli_close($con);
$extra="education.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";


    }
}
    ?>