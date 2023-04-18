<?php 
require('conn.php');
$name=$phone=$person=$email=$reqName='';
$data = mysqli=>query("SELECT * FROM biz");
if($data){
    echo 'Ok';
}else{
    echo 'Failed';
}

?>