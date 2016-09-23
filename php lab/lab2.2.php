<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Practical 2.2</title>
<meta charset="UTF-8">
<style type="text/css">
<?php
	$n_red = rand(0, 255);
	$n_blue = rand(0, 255);
	$n_green = rand(0, 255);
	echo("body {background-color:rgb($n_red,$n_green,$n_blue);}");
	?>
</style>
</head>
<body>
<?php
	echo ("<h1>Part 1</h1>");	
	for($cols = 1;$cols<=10;$cols++)
    {
		for($rows = 1;$rows<=10;$rows++)
		{
		if($cols%2==1)
		{
		echo ("<img src = \"happyPenguin.gif\" alt = 'Happy Penguin' width='50' height='50'  />");
		}
		else
		{
		echo ("<img src = \"angryDino.gif\" alt = 'angry dino' width='50' height='50'  />");
		}
		}
	echo ("<br>");
	}
	echo ("<h2>Part 2</h2>");	
	echo ("<br>");
    for($cols = 1;$cols<=10;$cols++)
	{
		for($rows = 1;$rows<=$cols;$rows++)
		{
		if($cols%2==1)
		{
		echo ("<img src = \"happyPenguin.gif\" alt = 'Happy Penguin' width='50' height='50'  />");
		}
		else
		{
		echo ("<img src = \"angryDino.gif\" alt = 'angry dino' width='50' height='50'  />");
		}
		}
	echo ("<br>");
	}
	
	for($cols = 7;$cols>0;--$cols)
	{
		for($rows = 1;$rows<=$cols;$rows++)
		{
		if($cols%2==1)
		{
		echo ("<img src = \"happyPenguin.gif\" alt = 'Happy Penguin' width='50' height='50'  />");
		}
		else
		{
		echo ("<img src = \"angryDino.gif\" alt = 'angry dino' width='50' height='50'  />");
		}
		}
	echo ("<br>");
	}
	echo ("<h2>Part 3</h2>");	
	$n_red = rand(0, 255);
	$n_blue = rand(0, 255);
	$n_green = rand(0, 255);
	echo("the background is $n_red,$n_green,$n_blue");
	
	echo ("<h2>Part 4</h2>");
	$nNumber=rand(1,25);
	
	for($i=0;$i<=$nNumber;$i++)
	{
	 $numbers[$i] =rand(0,100);
	}
	echo ("<table>");
	echo ("<tr>");
	echo("<th>Index</th>");
	echo("<th>Value</th>");
	echo ("</tr>");
	
	foreach($numbers as $index=>$random)
	{
	echo("<tr>");
	echo("<td>$index</td>");
	echo("<td>$random</td>");
	echo("</tr>");
	}
	echo ("</table>");
	
	?>
</body>
</html>