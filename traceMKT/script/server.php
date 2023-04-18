<?php 
require('conn.php');
$name=$phone=$person=$email=$reqName='';
//$person = json_decode($_POST["person"]);\
$reqName=$_POST['reqName'];
echo $reqName;
    if($reqName=='member'){
        echo 'Hello';
    }else{
        echo'World';
}
//$name=$_POST['name'];
//$phone=$_POST['phone'];
//$email=$_POST['email'];

//echo $phone;

?>