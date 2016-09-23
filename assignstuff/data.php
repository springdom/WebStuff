<!doctype html>
<html>
<!--Dale first mysql program-->

	<head>
		<title>MySQL with PHP</title>
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
			$host ="localhost";
			$user = "dale";
			$password = "****";
			
			$connection = mysql_connect($host, $user, $password)
				or die("Couldn't connect:".mysql_error());
			
			$database = "dale_dbContacts";
			//one time only create the database
			/*
			
			$createDbQuery = "CREATE DATABASE $database";
			$result = mysql_query($createDbQuery);
			echo("Result of creating database is $result");
			*/
						
			$db = mysql_select_db($database, $connection) or 
				die("Couldn't select database");
				
			$dropQuery ="DROP TABLE tblContactsInfo";
			$result=mysql_query($dropQuery);
				
			$createQuery ="CREATE TABLE tblContactsInfo
			(
				ID		INT(6) NOT NULL AUTO_INCREMENT,
				Name	VARCHAR(20) NOT NULL,
				Phone	INT(10) NOT NULL,
				
				PRIMARY KEY(ID)			
			)";
			
			$result=mysql_query($createQuery);
			
			$insertQuery ="INSERT into tblContactsInfo(Name, Phone)
			VALUES('Larry','02711111111')";
			$result=mysql_query($insertQuery);
			
			
			$insertQuery ="INSERT into tblContactsInfo(Name, Phone)
			VALUES('Curly','027222222222')";
			$result=mysql_query($insertQuery);
			
			
			$insertQuery ="INSERT into tblContactsInfo(Name, Phone)
			VALUES('Mo','027333333333')";
			$result=mysql_query($insertQuery);
			
			
			$selectString = "SELECT * from tblContactsInfo";
			$result = mysql_query($selectString);
			
			echo("<table>");
			echo("<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Phone</th>
				</tr>");

				while($row = mysql_fetch_row($result))
				{
				echo("<tr>");
				foreach($row as $index=>$value)
					echo("<td>$value</td>");					
				echo("</tr>");	
				}
			echo("</table>");
			
				
			$selectString = "SELECT * from tblContactsInfo where (Name like'%y')";
			$result = mysql_query($selectString);
						
			echo("<table>");
			echo("<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Phone</th>
				</tr>");

				while($row = mysql_fetch_row($result))
				{
				echo("<tr>");
				foreach($row as $index=>$value)
					echo("<td>$value</td>");					
				echo("</tr>");	
				}
			echo("</table>");
			
			$selectString = "SHOW COLUMNS FROM tblContactsInfo";
			$result = mysql_query($selectString);
			
			echo("<table>");
			echo("<tr>
					<th>Field</th>
					<th>Type</th>
					<th>Null</th>
					<th>Key</th>
					<th>Default</th>
					<th>Extra</th>
				</tr>");

				while($row = mysql_fetch_row($result))
				{
				echo("<tr>");
				foreach($row as $index=>$value)
					echo("<td>$value</td>");					
				echo("</tr>");	
				}
			echo("</table>");
			
			
			
			mysql_free_result($result);
		?>
	</body>
</html>
		
		
		