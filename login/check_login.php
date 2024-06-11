<?php
$email = $_POST['email'];
$password = $_POST['password'];

if($email == "admin@admin.com" && $password == "123456"){
    header("Location: ../dashboard/");
}
else{
    header("Location: ../login/");
}

?>