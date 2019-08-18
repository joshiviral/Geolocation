<?php

if(!empty($_SERVER["HTTP_CLIENT_IP"]))
{
	$ip= $_SERVER["HTTP_CLIENT_IP"];
	
}

elseif(!empty(($_SERVER["HTTP_X_FORWARDED_FOR"])))

{
	$ip =$_SERVER["HTTP_X_FORWARDED_FOR"];
	
}
else{
$ip=$_SERVER["REMOTE_ADDR"];	
}

echo $ip;

$split = explode(".", $ip);
echo $split[3];
	

$db=mysqli_connect('localhost','id1958135_viral','94302','id1958135_simple')or die("Could not connect to Db");

/*
$que = "INSERT INTO ipaddress VALUES (5,'brampton','$ip','Bell')";

mysqli_query($db,$que) or die("Error inserting record: ".mysqli_error($db));

if(mysqli_affected_rows($db) != 1)
{
  echo "Please check your query..";
}
else{
  echo "1 row inserted..";
}
*/

?>