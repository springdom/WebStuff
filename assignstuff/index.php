<?php
/*
Name:Matthew Taylor
Date:28-Aug-13
Class:Web 2
Description:The following code stores records(sport, name,gender) for olympic athletes into a database using PHP and MYSQL
*/
?>
<!doctype html>
<html>  
    <head>
        <title>Assignment1</title>
        <meta charset="UTF-8">
    <style>
        body {
            background:#5D0000;
            color:white;
            font-family:helvetica, arial, sans-serif;
        }
        table {
            border-collapse: separate;
            margin-left:450px;
            background:#005D1A;
            
        }
        td, th {
            border:2px solid #DFA901;
            padding: 10px;
        }
        .wrap {
            /*replace 900px with your width*/
            width:900px;
        }
        #header {
            width:100%;
            float:left;
            padding:15px 0;
        }
        #header img {
            padding-left:190px;
        }
        form
        {
        width:50px;
        padding-left:550px;
        }
    </style>
        </head>
	<body>
<div id="header">
    <div class="wrap">
        <div class="logo">
            <a href="website.html">
                <img src="images/style/Banner.jpg" alt="Olympic Banner">
            </a>
        </div>
    </div>
</div>
<?php
//login to server
$host="localhost"; $userMS="root"; $passwordMS="password321";

//connect to...
$connection=mysql_connect($host,$userMS,$passwordMS) or  die("Couldn't connect:" .mysql_error());

//find and connect to database
$database = "taylomj5_olympics";
$db = mysql_select_db($database, $connection) or die("Couldn't select database");

//drops previous tables
$dropQuery ="DROP TABLE tblOlympicathletes"; 

$result=mysql_query($dropQuery);
$createQuery = "CREATE TABLE tblOlympicathletes
(
	athleteID		INT(6)	    NOT NULL AUTO_INCREMENT,
	lastName		VARCHAR(20)	NOT NULL,
    firstName       VARCHAR(20)	NOT NULL,
    gender          VARCHAR(20)	NOT NULL,
    image           VARCHAR(20)	NOT NULL,
    sport           VARCHAR(30)	NOT NULL,

	PRIMARY KEY(athleteID)
)";
$result=mysql_query($createQuery);

//function to create records and insert into table
function createRecord($lastName,$firstName,$gender,$sport,$image)
{
    $insertQuery="INSERT INTO tblOlympicathletes(lastName,firstName,gender,sport,image)                                                                    
                   values('$lastName','$firstName','$gender','$sport','$image')"; 
    
$result=mysql_query($insertQuery);
$count=mysql_insert_id();
//echo("Storing Record <strong>$count</strong><br>");
}


//Data to insert into table
createRecord('Ostapchuk','Nadzeya','W','Weightlifting','Ostaphuk.jpg' ); 
createRecord('Pipes','Ben','M','Volleyball','Pipes.jpg' ); 
createRecord('Bolshakov','Sergey','M','Swimming','Bolshakov.jpg' ); 
createRecord('Niyomugabo','Jackson','M','Swimming','Niyomugabo.jpg');
createRecord('Palameika','Jackson','W','Athletics','Palameika.jpg' ); 
createRecord('Sibello','Gianfranco','M','Sailing','Sibello.jpg' ); 
createRecord('Kulkina','Anna','W','Synchronised Swimming','Kulkina.jpg'); 
createRecord('Degtyarev','Egor ','M','Swimming','Degtyarev.jpg' ); 
createRecord('Garcia','Fernando Gabriel ','M','Handball','Garcia.jpg' ); 
createRecord('Kynard','Erik','M','Athletics','Kynard.jpg' );
createRecord('Taouerghi','Anouer','M','Volleyball','Taouerghi.jpg' ); 
createRecord('Cheverton','Samantha','W','Swimming','Cheverton.jpg' ); 
createRecord('Takano','Aya','W','Swimming','Takano.jpg' ); 
createRecord('Sakai','Hiroki','M','Football','Sakai.jpg' ); 
createRecord('Eastham','Casey','W','Hockey','Eastham.jpg' );


//Dynamic Listbox linked with table
$self = htmlentities($_SERVER['PHP_SELF']);
echo("<form action = '$self' method='POST'>
      <fieldset>
        <legend>Olympic Sports</legend>");
$selectString = "SELECT DISTINCT sport FROM tblOlympicathletes"; 
$result = mysql_query($selectString); 
echo "<SELECT name=sports>";
echo "<OPTION value='default'>Show All:</OPTION>";
   while ($row = mysql_fetch_row($result)) 
   {
      foreach ($row as $value) 
       { 
         echo "<OPTION value='$value'"; 
      } 
echo ">$value</OPTION>";
}
   
echo "</SELECT>"; 
echo"<input type='submit' name='search' value = 'search'>";
echo"<input type='submit' name='clear' value = 'Clear Fields'>";
echo("</fieldset>
</form>");

//Button Detection
if(isset($_POST['search']))
{
 mainTable();
}
elseif(isset($_POST['search']))
{
}

//Main table that prints table
function mainTable()
{ 
//grabs variable from dynamic link box
$sport=$_POST['sports'];
//switch to match variables and find in table
switch($sport)
{
    case 'Weightlifting':
    $selectString = "SELECT * FROM tblOlympicathletes WHERE sport='Weightlifting'"; 
    $result = mysql_query($selectString);
    break;
    case 'Swimming':
    $selectString = "SELECT * FROM tblOlympicathletes WHERE sport='Swimming'"; 
$result = mysql_query($selectString);
    break;
    case 'Athletics':
    $selectString = "SELECT * FROM tblOlympicathletes WHERE sport='Athletics'"; 
$result = mysql_query($selectString); 
    break;
    case 'Sailing':
    $selectString = "SELECT * FROM tblOlympicathletes WHERE sport='Sailing'"; 
$result = mysql_query($selectString);
    break;
    case 'Handball':
    $selectString = "SELECT * FROM tblOlympicathletes WHERE sport='Handball'";
$result = mysql_query($selectString);
    break;
    case 'Football':$selectString = "SELECT * FROM tblOlympicathletes WHERE sport='Football'";
$result = mysql_query($selectString);
    break;
    case 'Volleyball':
    $selectString = "SELECT * FROM tblOlympicathletes WHERE sport='Volleyball'";
$result = mysql_query($selectString);
    break;    
    case 'Hockey':
    $selectString = "SELECT * FROM tblOlympicathletes WHERE sport='Hockey'";
$result = mysql_query($selectString);
    break;
    case 'Synchronised Swimming':
    $selectString = "SELECT * FROM tblOlympicathletes WHERE sport='Synchronised Swimming'";
$result = mysql_query($selectString);
    break;
    case 'default':
    $selectString = "SELECT * from tblOlympicathletes"; 
    $result = mysql_query($selectString);
    break; 
}
//main table    
echo("<table>"); 
echo("
    <tr>
        <th>athleteID</th>
        <th>lastName</th>
        <th>firstName</th>
        <th>Gender</th>
        <th>picture</th>
        <th>Sport</th>
    </tr>"); 
while($row = mysql_fetch_assoc($result)) 
{ 
    echo("<tr>"); 
    foreach($row as $index=>$value) 
    if($index=='image') 
    { 
        echo("
        <td>
            <img src=images/$value width=80px/>
        </td>");
    } 
    else 
    { 
    echo("<td>$value</td>"); 
    } echo("</tr>"); 
} 
echo("</table>");
}
?>
</body>
</html>