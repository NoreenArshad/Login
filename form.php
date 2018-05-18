<!DOCTYPE html>
<html>
<head>
      <title>Registration Form</title>
	  <style type="text/css">
	  body{
	  padding:0;
	  margin:0;
	  background:silver;}
	  #form{
	  width:50%;
	  height:400px;
	  margin:0 auto;
	  padding:20px;
	  background:white;}
	  input{
	  width:150px;
	  display:block;
	  margin:5px;
	  height:20px;
	  }
	  label{
	  margin:px;
	  font-weight:bold;
	  
	  }
	  </style>
</head>
<body>

<div id="form">
<form action="form.php" method="post">
<label> UserName</label>
<input type="text" name="username" placeholder="enter user name" required="required"/>
<label> Email</label>
<input type="email" name="email" placeholder="enter user email" required="required"/>
<label> Password</label>
<input type="password" name="pass" placeholder="enter user password" required="required"/>
<input type="submit" name="submit" value="submit"/>

</div>

</body>
</html>

<?php
include 'process.php';
$db=new db();
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$query="INSERT INTO users (user_name,user_email,user_pass) values ('$user','$email','$pass')";

 $db->insert($query);
/*if($run)
{
echo "<h2>Registration successful!</h2>";
}
*/


}
?>