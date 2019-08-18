<?php
session_start();
	
	$id='';
	$rltn="";
	$comment="";
	$ema="";
	if(isset($_POST['update']))
	{
		$db=mysqli_connect('68.178.217.40','pwocsurmonques','Rapt#19win515','pwocsurmonques');
		if(!$db)
		{
		die("Could not connect:".mysqli_connect_error());
		}
		else
		{	
		//echo "last id is".$_SESSION["lastid"];	
		$rltn=$_POST['txt2'];
		$comment=$_POST['comment'];
		$ema=$_POST['email'];
		$add="UPDATE ajaxcalldemo SET rltn='$rltn',comment='$comment',email='$ema' WHERE id=".$_SESSION["lastid"];			
		$query=mysqli_query($db,$add);
		if(!$query)
		{
		echo "Not Updated..".mysqli_error($db);
		}
		else
		{
		$url="radioExample3.php";
		echo "<script>location.href='$url'</script>";		
		}
		}
	}
	else
		{
				$id = isset($_GET['id']) ? $_GET['id'] : '';				
				$db=mysqli_connect('68.178.217.40','pwocsurmonques','Rapt#19win515','pwocsurmonques');	
				$sql = "SELECT rltn,comment,email FROM ajaxcalldemo WHERE id=".$id; // Please look at this too.
				$result = mysqli_query($db,$sql) or die (mysqli_error($db)); // dont put spaces in between it, else your code wont recognize it the query that needs to be executed
				while ($row = mysqli_fetch_array($result))
				{     // here too, you put a space between it							
				$rltn=$row[1];
				$comment=$row[2];
				$ema=$row[3];							
				}
				
			
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Radio Example</title>
    <meta charset="utf-8">
	<script type="text/javascript">
	</script>	
	<body>
				<form name="myForm" action="radioExample2.php" id="myform" method="post">
				<p><b><label>Relation:</label></b></p>					
				<input type="text" id="txt2"  name="txt2" value="<?php echo $rltn; ?>"><br>
					
				<p><b><label>Comments:</label></b></p>							
				<input type="text" id="comment"  name="comment" value="<?php echo $comment; ?>"></br>		
					
				<p><b><label>email:</label></b></p>						
				<input type="text" id="email"  name="email" value="<?php echo $ema; ?>"><br>
				
				<br><input type="submit" name="update" value="next">
				<br><input type="button" name="previous" value="previous" onclick="<?php $url="radioExample.php?id=".$_SESSION['lastid'];echo "document.location.href='$url'";?>">
	</form>	
	</body>
	</html>