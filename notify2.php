<html>
<head>
	<title>Page Title</title>
	
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css">
<link rel="stylesheet" href="/vendor/pygments/github.css">
<link rel="stylesheet" href="/asset/css/style.css">	
<script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
</head>
<style>
body
{
	padding-left:2em;
}
.post{
 background-color:blue;
}
</style>
<body>
</br>
</br>
<div id="post">
 <form action="notify.php" id="pform" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-3 control-label">Name</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="user_name" />
        </div>
    </div>
	<div class="form-group">
        <label class="col-sm-3 control-label">Message</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="notify_msg" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <button type="submit" class="btn btn-success">Post</button>
        </div>
    </div>
</form>
<div>
<?php
	$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if (!mysqli_connect_errno()) 
	{		
			$pg=$_GET['page'];
			if($pg=="" || $pg=="1")
			{
				$page=0;
			}
			else
			{
				$page=($pg*10)-10;
			}
			$qry="SELECT * FROM POST ORDER BY id DESC LIMIT $page,10 ";
			$qry1="SELECT * FROM POST";
			$result= mysqli_query($connect,$qry);
			$res= mysqli_query($connect,$qry1);
			$c=mysqli_num_rows($res);
			$count=ceil($c/10);
			while($row=mysqli_fetch_array($result)) 
			{
				$user=$row['username'];
				$date=$row['pdate'];
				$msg=$row['message'];
					echo "<blockquote>";
		           echo "<h2><b>$user</b></h2>";
				   echo "$msg";
				   echo "<footer><i>$date</i></footer>";
				   echo"</blockquote>";
 
  			}
	}
	for($i=1;$i<=$count;$i++)
			{
				?><ul class="pagination"><li><a href="notify2.php?page=<?php echo $i;?>"><?php echo $i?></a></li></ul><?php	
			}
?>
</body>
</html>
