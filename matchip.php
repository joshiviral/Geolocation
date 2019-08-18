<?php
require 'ipconvert.php';


//fetching data
$retrieve = "SELECT ip from ipaddress WHERE (ip='$ip')";
$result = mysqli_query($db,$retrieve) or die(mysqli_error($db));
echo " The results are retrieved";


if($result==$ip)
{
	$row = mysqli_fetch_array($result);
	$location = $row[1];
	echo "You are browsing from $location";
}

else
{
 echo "Its not fetching it.. Please check your code...";	
}
?>