<?php
$con='';
$servername='localhost';
$user='root';
$pwd='';
$db='trace';
$con=new mysqli($servername,$user,$pwd,$db);
if(!$con){
    echo '0';
}else{
    echo '1';
}
?>