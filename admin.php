<h3>welcome to admin page</h3>
<?php

session_start();
if(isset($_SESSION['user_data']))
{
	echo $_SESSION['user_data']['1'];
}
else{
	header("location:login.php");
}
?>


<!-----

this webpage is only for pratice here this is not in use. after completion of project i will delete this page


	--->