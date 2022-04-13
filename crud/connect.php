<?php

$con=new mysqli('localhost','root','sanjai2826','crudoperation');

if( !$con){
    // echo "connection successfully";
    die(mysqli_error($con));}
// }else{
//     die(mysqli_error($con));
// }

?>