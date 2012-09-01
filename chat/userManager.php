<?php
	ini_set('default_charset', 'UTF-8');
	
    $function = $_POST['function'];
	$ok=array();
	switch($function) {
		
    	 case('insert'):
			$con = mysql_connect('localhost', 'root', 'abc123');
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }

			mysql_select_db("gonegis_chat_users", $con);
			
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			
			$sql="INSERT INTO users (user_name,pass) VALUES('".$user."','".$pass."')";

			$result = mysql_query($sql);
		 break;
		  case('check'):
			$con = mysql_connect('localhost', 'root', 'abc123');
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }

			mysql_select_db("gonegis_chat_users", $con);
			
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			
			$sql="SELECT * FROM users WHERE user_name='".$user."'";

			$result = mysql_query($sql);
			
			if(mysql_num_rows($result)>0){
				$ok['ok']=true;
			}
			else
			{
				$ok['ok']=false;
			}
		 break;
	}
	echo json_encode($ok);
?>