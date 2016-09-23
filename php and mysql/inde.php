<!DOCTYPE html>
<html>
<head>
    <title>MYSQL and PHP Lab</title>
    <meta charset="UTF-8">
</head>
<body>
    
<?php
//login to server
$host="localhost"; $userMS="root"; $passwordMS="password321";
//connect to...
$connection=mysql_connect($host,$userMS,$passwordMS) or  die("Couldn't connect:" .mysql_error());
//find and connect to database
$database = "taylomj5_IN612";
$db = mysql_select_db($database, $connection) or die("Couldn't select database");
//create database
$database = "taylomj5_IN612";
$createDbQuery = "CREATE DATABASE $database";

$database = "taylomj5_IN612";
$createDbQuery = "CREATE DATABASE $database";
$result = mysql_query($createDbQuery);
//create a new table 
$createQuery = "CREATE TABLE  tblContactsInfo
(
	ID		INT(6)	NOT NULL AUTO_INCREMENT,
	Name		VARCHAR(20)	NOT NULL,
	Phone		INT(10)		NOT NULL,

	PRIMARY KEY(ID)
)";
//delete previous data
$selectString = "DELETE FROM tblContactsInfo WHERE id  >=4";
$result = mysql_query($selectString);
//insert data into table
$insertQuery = "INSERT into tblContactsInfo (Name, Phone) VALUES ('Larry', '0271111111')";
$result = mysql_query($insertQuery);

$insertQuery = "INSERT into tblContactsInfo (Name, Phone) VALUES ('Curly', '0272222222')";
$result = mysql_query($insertQuery);

$insertQuery = "INSERT into tblContactsInfo (Name, Phone) VALUES ('Mo', '0273333333')";
$result = mysql_query($insertQuery);

$selectString = "SELECT * FROM tblContactsInfo";
$result = mysql_query($selectString);
$row = mysql_fetch_row($result);

$selectString = "SELECT * FROM tblContactsInfo";
$result = mysql_query($selectString);

echo("<h2>Table Results</h2>");
echo("<table>");
echo("<tr><th>ID</th><th>Name</th><th>Phone</th></tr>");
while ($row = mysql_fetch_row($result))
{
    echo("<tr>");
	foreach($row as $value)
		echo("<td>$value</td>");
    echo("</tr>");
        
}
echo("</table");
echo("<p>");
    
$result = mysql_query("SELECT * FROM tblContactsInfo WHERE Name LIKE '%y' ") 
or die(mysql_error());  
echo("<h2>Names ending in Y</h2>");
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row
	echo $row['Name']." - ".$row['Phone']. "<br/>";
} 
?>  
</body>
</html>