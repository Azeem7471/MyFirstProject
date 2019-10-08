<?php
if(isset($_POST['sub']))
{	
	$name=$_POST['Name'];
	$sub=$_POST['Subject'];
	$email=$_POST['Email'];
	$phone=$_POST['Phone'];
	$message=$_POST['Message'];
	$body="Name:$name</br></br>Email:$email<br><br>Contact:$phone";
	$sent=mail("azeem7471@gmail.com",$sub,$body);
	if($sent)
	{
		echo "mail sent successfuly";
	}
}
?>