<?php
require "dbcon.php";
echo "naru";
if (isset($_POST["save"])) {
    
$dname=$_POST["dname"];
$pdate=$_POST["pdate"];
$per=$_POST["per"];
echo "save";
$dhname=$_POST["dhname"];
$phdate=$_POST["phdate"];
$hper=$_POST["hper"];
$ddname=$_POST["ddname"];
$mar=$_POST["ydate"];
$hon=$_POST["hpr"];
$num=$_POST["digname"];
$mel=$_POST["digdate"];
$flang=$_POST["digpr"];

$sql="insert into educationinfo(sscdivboard,sscyear,sscpercent,hscdivboard,hscpassyear,hscpercent,diploma,dippassyear,diplomapercent,degree,degreepassyear,cg)values('$dname','$pdate','$per','$dhname','$phdate','$hper','$ddname','$mar','$hon','$num','$mel','$flang')";

mysqli_query($con,$sql);
echo "save";
mysqli_close($con);
$extra="experience.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";



    }

    ?>