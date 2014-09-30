<html>
<head>
	<title>Notifying</title>
</head>

<body>
<?php
//mysqli_connect is the driver used to connect to database
	$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	//Checking for DB errors
	if (mysqli_connect_errno()) 
	{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}		
	//creating table ; if already table exist that command won't have any effect;
	mysqli_query($connect,"CREATE TABLE POST(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,pdate char(40),username char(30),message char(250))");
        date_default_timezone_set('Asia/Kolkata');// function to set time zone
        $dat= date("F j, Y, g:i a");// php function to retrive date and time
	$user=mysqli_real_escape_string($connect,$_POST['user_name']);//getting username from html form
	$msg=mysqli_real_escape_string($connect,$_POST['notify_msg']);// getting message
	$res="INSERT INTO POST(pdate,username,message) VALUES ('$dat','$user','$msg')";	// MySQL query for inserting 	
	mysqli_query($connect,$res);// executing the query
	include("index.html");// function to invoke index.html after insertng values to the table
        mysqli_close($connect);// closing the database

?>
</body>
</html>	
