<?php
require_once"dbconfig.php";
$query="select * from package where id='".$_POST['id']."'";
$result=select($query);
//$output='<option value="">Select price</option>';
while($res=mysqli_fetch_array($result))
{
	$output .='<option value="'.$res['charge'].'">'.$res['charge'].'</option>';
}
echo $output;

?>