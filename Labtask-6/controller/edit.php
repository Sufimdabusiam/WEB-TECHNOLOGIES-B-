<html>

<head>
<title> Edit Profile</title>

 </head>


<?php session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
?>
<body bgcolor="cyan">
<center>
<form action="change_in_file.php" method="post"><pre>
U Name:
<input type="text" value=<?php echo $_SESSION["uname"];?> name="uname" disabled="disabled"><br/>
Password:
<input type="password" value=<?php echo $_SESSION["pass"];?> name="pass"><br/>
E Mail:
<input type="text" name="email"><br/>
<input type="submit" name="sbt" value="submit" />

<a href="../view/customerhome.php">Go Back to Home</a>
<br><br>
</center>
</pre>
</form>
</body>
<?php 
}
else{
	header("Location:logout.php");
}
?>

</html>