<html>
<head>
	<title>Page Title</title>
</head>
<body>
<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap.js" rel="stylesheet" type="text/css" />
<?php
// the link html tag is to link the bootstrap stylesheet
//mysqli_connect is  MySQL driver to connect to the database
$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if (!mysqli_connect_errno()) //checking for errors
	{		
			$result= mysqli_query($connect,"SELECT * FROM POST ORDER BY id DESC");//sorting the records by id
									//where id is a PRIMARY KEY and AUTO INCREMENT 
			while($row=mysqli_fetch_array($result)) //fetching array from data base
			{
				
				$user=$row['username'];//user name
				$date=$row['pdate'];// "Post" date 
				$msg=$row['message'];// message
					echo "<blockquote>";// this <blockquote> is a bootstrap tag to display a side bar
		           echo "<h2><b>$user</b></h2>";
				   echo "<p>$msg</p>";
				   echo "<footer><i>$date</i></footer>";
				   echo "<br/>";		
				   echo "<br/>";
					echo"</blockquote>";// echoing 
	  			}
			
		
	}
	mysqli_close($connect);// Closing the database connection
?>

</body>
</html>
</body>
</html>

	
