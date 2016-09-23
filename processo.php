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
    <table>
    <?php

 foreach($_POST as $field=>$value) 
 {
 if($field!='submitted')
 {
     if($field=='place')
     {
         foreach($value as $cPlace)
         {
             echo("<tr>");
             echo("<td>$field</td> <td>$cPlace</td>");
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
        </table>
</body>
</html>