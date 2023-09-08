<?php
$host='localhost';
$user='root';
$password='';
$db='crud_operation';

$con=new mysqli($host,$user,$password,$db);

if($con){
   // print "connection successfull";
}
else{
    print "connection unsuccessfull";
}


?>
