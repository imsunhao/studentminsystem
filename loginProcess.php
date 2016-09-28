<?php
$id=$_POST['id'];
$passwd=$_POST['password'];
if($id=="100"&&passwd=="123"){
header("Location:stuManager.php");
exit();
}else{
echo "fail";
header("Location:login.php?errnum=1");
}
?>
