<?php
require "dbcon.php";
echo "swap";
if (isset($_POST["save"])) {
    
$dname=$_POST["flang"];
$pdate=$_POST["slang"];
$per=$_POST["tlang"];
echo "save";
$dhname=$_POST["ohname"];
$phdate=$_POST["poname"];
$hper=$_POST["sdate"];
$ddname=$_POST["edate"];
$mar=$_POST["description"];


$sql="insert into experienceinfo(project1,project2,project3,organizationname,wposition,sdate,edate,description)values('$dname','$pdate','$per','$dhname','$phdate','$hper','$ddname','$mar')";

mysqli_query($con,$sql);
echo "save";
mysqli_close($con);
$extra="homee.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";


    }

    ?>