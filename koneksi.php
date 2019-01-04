<?php
//host, user, password, nama database
$conn =  mysqli_connect('localhost','root','','andaglos');

if(!$conn){
    
    # code...
    die('ada eror' . mysqli_connect_error());
}
?>