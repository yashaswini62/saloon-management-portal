<?php
require_once"dbconfig.php";
//require_once"validation.php";
##################################################

###########################################################
	if(isset($_REQUEST['login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	 $query="select * from admin where email='$email' and password='$password'";
	
	
	
	
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['id']=$id;
		$_SESSION['name']=$name;
		//$_SESSION['image']=$image;
		$_SESSION['login']="yes";
		
		echo"<script>alert('Login Success');
		window.location='index.php';
		</script>";
	}
	else
	{
		echo"email or password is incorrect";
	}
	
		
	}

#############################################
if(isset($_REQUEST['change']))
	{
	$userid=$_SESSION['userid'];	
	$oldpassword=trim($_REQUEST['oldpassword']);
	$newpassword=trim($_REQUEST['newpassword']);
	$cpassword=trim($_REQUEST['cpassword']);
	$valid=true;
	$query="update user set password='$newpassword' where password='$oldpassword' and userid='$userid'";
	
	
	if(checklength($oldpassword, 12))
	{
		echo"invalid old password";
		$valid=false;
	}
	if(checklength($newpassword, 12))
	{
		echo"invalid New password";
		$valid=false;
	}
	if($cpassword!=$newpassword)
	{
		echo"both password not matched";
		$valid=false;
	}
	if($valid)
	{
	$n=iud($query);
	
	if($n==1)
	{		
       echo"1";
	}
	else
	{
		echo"something wrong";
	}
	}
		
	}

#######################################################
if(isset($_REQUEST['forget']))
	{
	$email=trim($_REQUEST['email']);

	$time=time();
	$otp=md5($email.$time);
	$valid=true;
	if(strlen($otp)!=32)
		{
			echo "invalid otp";
			$valid=false;
		}
		if(!checkemail($email))
	{
		echo"invalid email";
		$valid=false;
	}
	
	$query="update user set otp='$otp' where email='$email' ";
	
if($valid){
	$n=iud($query);
if($n==1)
{
	echo"1";
}
else
{
	echo"invalid forget password";
}
}
}
	
################################################
if(isset($_REQUEST['reset']))
{
	$otp=trim($_REQUEST['otp']);
	$newpassword=trim($_REQUEST['newpassword']);
	$cpassword=trim($_REQUEST['cpassword']);
	$valid=true;
	if(strlen($otp)!=32)
	{
		echo"invalid otp";
		$valid=false;
	}
	if(checklength($newpassword, 6))
	{
		echo"invalid  New password";
		$valid=false;
	}
	if($cpassword!=$newpassword)
	{
		echo"Password and Confirm Password is not match";
		$valid=false;
	}
	$query="update user set password='$newpassword',otp='' where otp='$otp'";
	
	if($valid)
	{
		$n=iud($query);
	if($n==1)
	{
		echo"1";
	}
	else
	{
		echo "something wrong";
	}
	}
}
###########################################################################
if(isset($_REQUEST['upload']))
{
 
$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];
$userid=$_SESSION['userid'];
	$query="update user set image='$name' where userid='$userid'";

	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 $_SESSION['image']=$name;
		 echo"<script>alert('Image uploaded successfully');
		 window.location='change_image.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"image is not upload";
	}
	
	
	
	
	
}
##########################################################################
if(isset($_REQUEST['go_submit']))
{
	extract($_REQUEST);

	$query="INSERT INTO `package`( `titles`, `charge`, `description`) VALUES
	('$title','$price','$description')";

	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert(' uploaded successfully');
		 window.location='table.php';
		 </script>";
	 }
	
	
	else
	{
		echo"Project is not upload";
	}
}

###################################################################################################
if(isset($_REQUEST['go_update']))
{
	extract($_REQUEST);

	$query="UPDATE  `package` SET `titles`='$title' , `charge`='$price',  `description`='$description' where id='$id'";

	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert(' updated successfully');
		 window.location='table.php';
		 </script>";
	 }
	
	
	else
	{
		echo"<script>alert(' Something Wrong');
		 window.location='table.php';
		 </script>";
	}
}

###################################################################################################
if(@$_REQUEST['delete']=='yes')
{
$id=$_REQUEST['id'];
echo $p="DELETE from `goggle` where id ='$id'";

$n=iud($p);
if($n==1)
{
	header("location:table.php");
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='table.php';
		 </script>";
}
}	
###############################################

	if(@$_REQUEST['edit']=='yes')
{
	$id=$_REQUEST['id'];
	header("location:edit_project.php?id=$id");
}
############################################3#####
if(@$_REQUEST['cedit']=='yes')
{
	$id=$_REQUEST['id'];
	header("location:edit_category.php?id=$id");
}
###################################################	
if(@$_REQUEST['reportedit']=='yes')
{
	$id=$_REQUEST['id'];
	header("location:edit_user.php?id=$id");
}
###################################################
if(@$_REQUEST['pdelete']=='yes')
{
$id=$_REQUEST['pid'];
$n=iud("DELETE FROM `price` WHERE PriceID='$id'");
if($n==1)
{
	header("location:view_price.php");
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_price.php';
		 </script>";
}
}	
##################################################
if(@$_REQUEST['reportdelete']=='yes')
{
$id=$_REQUEST['id'];
$n=iud("DELETE FROM `login` WHERE LoginID='$id'");
if($n==1)
{
	header("location:reports.php");
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='reports.php';
		 </script>";
}
}	

##################################################

	if(@$_REQUEST['pedit']=='yes')
{
	$id=$_REQUEST['pid'];
	header("location:edit_price.php?pid=$id");
}
##################################################
if(@$_REQUEST['deleteq']=='yes')
{
$id=$_REQUEST['qid'];
$q="UPDATE `question` SET `status`=b'0' WHERE QuestionID='$id'";
$n=iud($q);
if($n==1)
{
	echo"<script>alert('DELETED');window.location='select_view_lang.php';</script>";
	//header("location:select_view_lang.php");
}
else
{
	//Notice: Undefined index: qid in C:\xampp\htdocs\admin\edit_project.php on line 11

	//echo"<script>alert('Something Wrong');window.location='question_view.php';</script>";
}
}	
#################################################

	if(@$_REQUEST['editq']=='yes')
{
	$id=$_REQUEST['qid'];
	header("location:edit_project.php?id=$id");
}
#################################################
if(isset($_REQUEST['Update_category']))
{
	extract($_REQUEST);
	
echo $query="UPDATE `category` SET `Name`='$cat_update' WHERE CategoryID='$cat_id'";
	
	
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert(' Updated successfully'); window.location='view_category.php'; </script>";
	 }
	
	
	else
	{
		echo"<script>alert('Something Wrong');window.location='view_category.php';</script>";
	}
}
	#####################################################################
	if(isset($_REQUEST['Update_price']))
{
	extract($_REQUEST);
	
echo $query="UPDATE `price` SET `Price`='$price_update' WHERE PriceID='$p_id'";
	
	
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert(' Updated successfully'); window.location='view_price.php'; </script>";
	 }
	
	
	else
	{
		echo"<script>alert('Something Wrong');window.location='view_price.php';</script>";
	}
}
	#####################################################################
	if(isset($_REQUEST['blog_submit']))
{
	echo"gkjhdkjghdkjh";
	extract($_REQUEST);
	$error=$_FILES["image"]["error"];

$name=$_FILES["image"]["name"];
$type=$_FILES["image"]["type"];
$size=$_FILES["image"]["size"];
$tmp_name=$_FILES["image"]["tmp_name"];

	$query="insert into  `blog`( `category`, `title`, `keyword`, `short_dis`, `image`, `blog_dis`) VALUES  
	('$category','$title','$metakey','$shortdis','$name','$blogdis')";

	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert('Blog uploaded successfully');
		 window.location='view_blog_list.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"<script>alert('Blog is not upload');
		 window.location='view_blog_list.php';
		 </script>";
	}
}
#########################################################################################
###################################################################################################
if(@$_REQUEST['blogdelete']=='yes')
{
$id=$_REQUEST['id'];
$n=iud("DELETE FROM `blog` WHERE blogid='$id'");
if($n==1)
{
	header("location:view_blog_list.php");
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_blog_list.php';
		 </script>";
}
}	
###############################################

	if(@$_REQUEST['blogedit']=='yes')
{
	$id=$_REQUEST['id'];
	header("location:edit_blog.php?id=$id");
}
	###########################################################
if(isset($_REQUEST['update_blog']))
{
	extract($_REQUEST);
	$error=$_FILES["uimage"]["error"];

$name=$_FILES["uimage"]["name"];
$type=$_FILES["uimage"]["type"];
$size=$_FILES["uimage"]["size"];
$tmp_name=$_FILES["uimage"]["tmp_name"];

$query="UPDATE `blog` SET `category`='$ucategory',`title`='$utitle',`keyword`='$umetakey',`short_dis`='$ushortdis',`image`='$name',`blog_dis`='$ublogdis' WHERE blogid='$ublogid'";
	
	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert('Blog Updated successfully');
		 window.location='view_blog_list.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"<script>alert('Blog is not Update ');
		 window.location='view_blog_list.php';
		 </script>";
	}
}	
	####################################################################
if(@$_REQUEST['delete_enquiry']=='yes')
{
$id=$_REQUEST['id'];

		 
$n=iud("DELETE FROM `download_enquiry` WHERE cus_id='$id'");
if($n==1)
{
	echo"<script>
	
	alert('Successful');
		 window.location='enquiry.php';
		 </script>";
}
		 
else
{
	echo"<script>alert('Something Wrong');
		 window.location='enquiry.php';
		 </script>";
}
}	
	
	
	
##########################################################################
	
	   
	
	
	










?>