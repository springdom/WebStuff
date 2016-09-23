<!doctype html>
<html>
	<head>
		<title>Assignment1</title>
		<meta charset="UTF-8">
	</head>
	
	<style>
		body
		{
			margin-left:100px;
		}
		table
		{
			border-collapse: separate;
			border:2px solid blue;
			padding:1px;
			margin:10px;
		}
						
		td, th
		{
			border:2px solid blue;
			padding: 10px;							
		}
	</style>

	<body>    
<?php
//login to server
$host="localhost"; $userMS="root"; $passwordMS="password321";
//connect to...
$connection=mysql_connect($host,$userMS,$passwordMS) or  die("Couldn't connect:" .mysql_error());
//find and connect to database
$database = "taylomj5_IN612";
$db = mysql_select_db($database, $connection) or die("Couldn't select database");
//drops previous tables
$dropQuery ="DROP TABLE tblContactsInfo"; 
$result=mysql_query($dropQuery);
//create a new table 
$createQuery = "CREATE TABLE  tblContactsInfo
(
	ID		INT(6)	NOT NULL AUTO_INCREMENT,
	Name		VARCHAR(20)	NOT NULL,
	Phone		INT(10)		NOT NULL,

	PRIMARY KEY(ID)
)";
$result=mysql_query($createQuery);
//insert data into table
$insertQuery = "INSERT into tblContactsInfo (Name, Phone) VALUES ('Larry', '0271111111')";
$result = mysql_query($insertQuery);
$insertQuery = "INSERT into tblContactsInfo (Name, Phone) VALUES ('Curly', '0272222222')";
$result = mysql_query($insertQuery);
$insertQuery = "INSERT into tblContactsInfo (Name, Phone) VALUES ('Mo', '0273333333')";
$result = mysql_query($insertQuery);

$selectString = "SELECT * FROM tblContactsInfo";
$result = mysql_query($selectString);

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
echo("<p></p>");
    
$result = mysql_query("SELECT * FROM tblContactsInfo WHERE Name LIKE '%y'") or die(mysql_error()); 
echo("<h1>Names ending in Y</h2>");
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row
	echo $row['Name']." - ".$row['Phone']. "<br/>";
} 
echo("<h1>Table Results</h1>");

?>
    
</body>
</html>