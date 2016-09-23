<!DOCTYPE html>
<html lang="en-US">

<head>
<title>Practical 3.1 Forms</title>
<link type="text/css" rel="stylesheet" href="olympics.css">
<meta charset="UTF-8">
</head>
<body>
    <table border="2px">
<?php
    $numberCountries = $_POST['nCountries'];
    $firstMedalSport = $_POST['firstMedal'];
    $notTopThree = $_POST['discontinuedSport'];
    $hostCityArray = $_POST['city'];
    $discontinuedSport = $_POST['discontinuedSport'];
    $score = 0;

echo("<tr>");
echo("<th>Questions</th>");
echo("<th>Your Soulution</th>");
echo("<th>Mark</th>");
echo("</tr>");
echo("<tr>");
echo("<td>Number of Countries</td>");
echo("<td>$numberCountries</td>");
if($numberCountries=='205')
{
    echo("<td><img src='images/check3.gif' alt='correct' width='50px'/></td>");
    $score++;
}    
else
{
echo("<td><img src='images/cross3.gif' alt='correct' width='50px'/></td>");
}
echo("</tr>");

//first medal
echo("<tr>");
echo("<td>First Medal</td>");
echo("<td>$firstMedal</td>");
if($firstMedal=='shooting')
{
    echo("<td><img src='images/check3.gif' alt='correct' width='50px'/></td>");
    $score++;
}    
else
{
echo("<td><img src='images/cross3.gif' alt='correct' width='50px'/></td>");
}
echo("</tr>");
echo("<tr>");
echo("<td>Not in top 3</td>");
echo("<td>$notTop3</td>");
if($notTop3=='italy')
{
    echo("<td><img src='images/check3.gif' alt='correct' width='50px'/></td>");
    $score++;
}    
else
{
echo("<td><img src='images/cross3.gif' alt='correct' width='50px'/></td>");
}
echo("</tr>");
?>
    </table>
</body>
</html>