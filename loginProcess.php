<?php
$id=$_POST['id'];
$passwd=$_POST['password'];
$conn=mysql_connect("localhost","root","");
if(!$conn){die("connect fail".mysql_errno());}
mysql_query("set names utf8",$conn) or die (mysql_errno());
mysql_select_db("stuadminsystem",$conn) or die (mysql_errno());
$sql="select * from admin where id=$id ";
$res=mysql_query($sql,$conn);
if($row=mysql_fetch_assoc($res)){if($row['password']==md5($passwd)){
$name=$row['name'];
header("Location:stuManager.php?name=$name");}}else{header("Location:login.php?errnum=1");
;
}
mysql_free_result($res);
mysql_close($conn);
exit();
?>
