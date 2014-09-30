<html>
<head>
	<title>Page Title</title>
</head>
<body>
<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap.js" rel="stylesheet" type="text/css" />
<?php

$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if (!mysqli_connect_errno()) 
	{		
			$result= mysqli_query($connect,"SELECT * FROM POST ORDER BY id DESC");
			while($row=mysqli_fetch_array($result)) 
			{
				
				$user=$row['username'];
				$date=$row['pdate'];
				$msg=$row['message'];
					echo "<blockquote>";
		           echo "<h2><b>$user</b></h2>";
				   echo "<p>$msg</p>";
				   echo "<footer><i>$date</i></footer>";
				   echo "<br/>";		
				   echo "<br/>";
					echo"</blockquote>";
	  			}
			
		
	}
	mysqli_close($connect);
?>

</body>
</html>
</body>
</html>

	
