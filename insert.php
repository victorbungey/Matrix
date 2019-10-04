<?php

Include('connect.php'); // include connect.php page for database connection
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['firstname']=='' || $_REQUEST['lastname']=='' || $_REQUEST['country']==''|| $_REQUEST['subject']=='')
{
Echo "please fill the empty field.";
}
Else
{
	$sql="insert into signup(firstname,lastname,country,subject) values('".$_REQUEST['firstname']."', '".$_REQUEST['lastname']."', '".$_REQUEST['country']."', '".$_REQUEST['subject']."')";
	$res=mysqli_query($sql);
	If($res)
	{
		Echo "Record Successfully inserted";
	}
	Else
	{
		Echo "Problem Inserting record";
	}
}
}
print_r(error_get_last());
?>
