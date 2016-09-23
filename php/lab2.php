<!doctype html>
<html>
  <head>
    <title>PHP Lab</title>
    <meta charset="UTF-8">
  </head>
  <body>
  
  <?php
  echo "Part 1 <br>";
  echo "<br>";
  for ($i=1; $i<=5; $i++)
  {
  echo " $i <br>";
  }
  echo "<br>";
  
  echo "Part 2 <br>";
  echo "<br>";
  echo "$_SERVER[PHP_SELF]<br>";
  echo "$_SERVER[SERVER_NAME]"; 
  
  echo "<br>";

  echo "Part 3 <br>";
  echo "<br>";
  $animal=array("horse","dog","sheep","flamingo","hippo");
  foreach ($animal as $value)
  {
  echo "$value<br>";
  }
  echo "<br>";
  echo "Part 2 <br>";
  echo "<br>";
    echo ("<table>");
    echo("<tr>");
    echo("<th> Animals </th>");
    echo("<th> Location </th>");
    echo("</tr>");

    foreach($animal as $index=>$value)
    {
     echo("<tr>");
     echo("<td> $value </td>");
     echo("<td> $index </td>");
     echo("</tr>");
    }
  echo ("</table>");
  ?>
  </body>
</html>
  