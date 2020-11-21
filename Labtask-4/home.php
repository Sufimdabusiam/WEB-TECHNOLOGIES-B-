u<!DOCTYPE html>
<html>
    <head>
        
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
    	<?php include 'header.php' ?>

           <tr>
		<th>NAME</th>
		<th>EMAIL</th>
	</tr>

<?php
include("connection.php");
error_reporting(0);
$data=$_POST['search'];
if($data){
$query="select * from registration_db where name='$data'";
$result = mysqli_query($conn, $query);
while($rows=mysqli_fetch_array($result)){
	echo  "<tr>";
	echo  "<td>";
	echo  $rows['name'];
	echo  "</td>";
	echo  "<td>";
	echo  $rows['email'];
	echo  "</td";
	echo  "</tr>";
	echo "<br>";
}
}

else{
	echo "nothing found";
}


?>

</table>

            <?php include 'footer.php' ?>
            
          </body>
</html>
