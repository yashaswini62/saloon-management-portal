<?php
require_once"dbconfig.php";
 $id=$_REQUEST['id'];
$n=iud("UPDATE `booking` SET `status`='1' WHERE id='$id'");
if($n==1)
{
	header("location:user1.php");
}
?>