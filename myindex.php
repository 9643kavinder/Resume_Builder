<!DOCTYPE html>
<?php
include 'dbconnect.php';

include 'userdata.inc.php';
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{ 
	

	function getuserfield($field)
{
	$query="SELECT $field FROM `my_users` WHERE `ID`='".$_SESSION['user_id']."'";
	if($query_run=mysql_query($query))
	{
		return mysql_result($query_run,0,$field);
	}

}
$firstname=getuserfield('firstname');
$surname=getuserfield('surname');
echo "Congrats!! You have logged in as $firstname $surname<a href='logout.php'> Logout</a>";

	
    include 'add_entry.php';
}
else
{
 include 'login_form.php';

}
?>