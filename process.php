<!doctype html>
<html>

<head>
    <title>Form Processing</title>
    <meta charset="UTF-8">
    <style type="text/css">
        body {
            background-color:sandybrown;
            padding-left:10px;
        }
        fieldset {
            padding:10px;
        }
    </style>
</head>

<body>
    <?php

 foreach($_POST as $field=>$value) 
 {
 if($field!='submit')
 {
     if($field=='fruit')
     {
         foreach($value as $cFruit)
         {
             echo("<tr>");
             echo("<td>$field</td> <td>$cFruit</td>");
             echo("</tr>");
         }
     }
     else
     {
         echo("<tr>");
         echo("<td>$field</td> <td>$value</td> ");
         echo("</tr>");
     }

 }
 }
    ?>
</body>
</html>