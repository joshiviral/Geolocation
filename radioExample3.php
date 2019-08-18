<?php
/*
session_start();	
if(isset($_POST['up']))
{
		$db=mysqli_connect('68.178.217.40','pwocsurmonques','Rapt#19win515','pwocsurmonques');
		if(!$db)
		{
		die("Could not connect:".mysqli_connect_error());
		}
		else
		{	
			//echo "last id is".$_SESSION["lastid"];
			$pnum=$_POST['pnum'];
			$best_time=$_POST['best_time'];
			$voicemail=$_POST['voicemail'];
			if($id!='')
			{			
			$add="UPDATE ajaxcalldemo SET 
			
			phone_num ='$pnum',
			best_time ='$comment',
			voicemail ='$voicemail' 
			
			WHERE id=".$_SESSION["lastid"];		
			$query=mysqli_query($db,$add);
			if(!$query)
			{
			echo "Not Updated..".mysqli_error($db);
			}
			else
			{
			echo "updated...";		
			}
			}
		}
}
else
{
				$db=mysqli_connect('68.178.217.40','pwocsurmonques','Rapt#19win515','pwocsurmonques');	
				$sql = "SELECT * FROM ajaxcalldemo WHERE id=".$id; // Please look at this too.
				$result = mysqli_query($db,$sql) or die (mysqli_error($db)); // dont put spaces in between it, else your code wont recognize it the query that needs to be executed
				while ($row = mysqli_fetch_array($result))
				{     // here too, you put a space between it							
				$phone_num=$row[1];
				$best_time=$row[2];
				$voicemail=$row[3];							
				}
				}
}
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Radio Example</title>
    <meta charset="utf-8">
	<script type="text/javascript">
	</script>	
	<body>
				<form name="myForm" id="myform" action="svup3.php"  method="post">
				<p><b><label>Phone Number:</label></b></p>					
				<input type="text" id="pnum"  name="pnum" value="<?php echo $pnum; ?>"><br>
					
				<p><b><label>Best Time to reach:</label></b></p>							
				<select name="best_time">
						<option value="am" <?php if($best_time == "am"){echo $val='checked="checked"';} ?>>A.M.</option>
						<option value="pm" <?php if($best_time == "pm"){echo $val='checked="checked"';} ?>>P.M.</option>
						<option value="anytime" <?php if($best_time == "anytime"){echo $val='checked="checked"';} ?>>Anytime</option>
						
					</select></br>		
					
				<p><b><label>Leave a Voicemail?</label></b></p>						
					<input type="radio" id="voicemail1" name="voicemail" value="Yes" <?php if($voicemail == "Yes"){echo $val='checked="checked"';} ?>>Yes<br>					
					<input type="radio" id="voicemail2" name="voicemail" value="No" <?php if($voicemail == "No"){echo $val='checked="checked"';} ?>>No<br>
				<br>				
				<br><input type="submit" name="up" value="submit">
				<br><input type="button" name="previous" value="previous" onclick="<?php $url="radioExample2.php?id=".$_SESSION['lastid'];echo "document.location.href='$url'";?>">
	</form>	
	</body>
	</html>