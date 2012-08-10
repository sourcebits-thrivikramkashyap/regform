<?php


	echo "Upload: " . file_get_contents($_FILES["file"]["name"]) . "<br />";
	echo "Type: " . $_FILES["file"]["type"] . "<br />";
	echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	echo "Stored in: " . $_FILES["file"]["tmp_name"];


echo  $_FILES["file"]["tmp_name"];
#echo "Hello World";
/*
echo "<br />";





echo "<table border=1 bgcolor=grey >";

echo "<tr><td>Name</td><td>".$_POST['name']."</td></tr>";
echo "<tr><td>Address:</td><td>".$_POST['address']."</td></tr>";
echo "<tr><td>phone:</td><td>".$_POST['phone']."</td></tr>";
echo "<tr><td>email:</td><td>".$_POST['email']."</td></tr>";
echo "</table>";

$name=$_POST['name'];
$password=$_POST['password'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];

#echo $_POST['submit'];
echo $_POST['uploadField'];
#echo $_FILES['uploadField']['type'];

echo "Form Details submitted successfully";

*/

/*db connection
$dbh=mysql_connect("localhost","root",'');
echo $dbh;
$db=mysql_select_db("test2");
echo $db;
*/
/*
$query1="insert into userinfo(name,password,address,phone,email)
 values($name,$password,$address,$phone,$email)";
$result1=mysql_query($query1);

echo $result1;

$query2="select * from users";
$result2=mysql_query($query2);
echo $result2;

echo "<html><body>";

echo "<table border=1>";
while($array=mysql_fetch_row($result2))
{
		echo "<tr>";
	foreach($array as $f){
		echo "<td>".$f."</td>";
	}
		echo "</tr>";
}

echo "</table>";

echo "</body></html>";
*/

/* Employee
$query2="select * from employee";
$result2=mysql_query($query2);
echo $result2;

echo "<html><body>";

echo "<table border=1>";
while($array=mysql_fetch_row($result2))
{
	echo "<tr>";
	foreach($array as $f){
		echo "<td>".$f."</td>";
	}
	echo "</tr>";
}

echo "</table>";

echo "</body></html>";



mysql_close($dbh);

	
Employee
*/

?>