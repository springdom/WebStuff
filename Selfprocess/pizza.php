<!doctype html>
<html>
<head>
    <title>Form Elements</title>
      <meta charset="UTF-8">
       <style type = "text/css">
body
{
    background-color:lightblue;
    padding-left:10px;
}
#header
{
text-align:center;               
}
fieldset
{
    padding:10px;
}
table,td,th,tr
{
    border:3px solid black;
    padding:10px;
}
table
{
border-collapse:collapse;
}

    </style>
</head>
<body >
<div id="header">
<img src="Images/pizzaBanner.jpg" alt="pizza logo"/>
</div>
<?php
    if (isset($_POST['submit']))
    {
        processForm();
    }
    elseif(isset($_POST['order']))
    {
        confirmForm();
    }
    else
    {
    showForm();
    }
function processForm()
{

//code to process the user input
    $price=0;
        
        echo("<h3>User Responses</h3>
        

            <table >
            <tr><th>Input Control</th><th>Value</th></tr>");

        foreach($_POST as $field=>$value)
        {
        if ($field != 'submit')
            {
            if(is_array($value))
            {
               foreach($value as $toppings)
               {
                   echo("<tr>");
                   echo("<td>$field</td><td>$toppings</td>");
                   echo("</tr>");
                   $price++;
               } 
            }
            else
            {
                echo("<tr>");
                echo("<td>$field</td><td>$value</td>");
                echo("</tr>");
            }
        }
        if($value=='small')
        {
        $price=5;               
        }
        if($value=='medium')
        {
        $price=10;
        }
        if($value=='large')
        {
        $price=15;    
        }
        }
    echo("</table>");
    echo("<strong>Total Cost is<strong> $price");
    
$self = htmlentities($_SERVER['PHP_SELF']);
    echo("<form action = '$self' method='POST'>
<p>
      <input type='submit' name='order' value = 'Order Pizza'>
      <input type='submit' name='submit' value = 'Cancel'>
      </form>");	
}
function confirmForm()
{
echo("Thank you for your order");
echo("<br>");
echo("Your pizza is on its way");
}
function showForm()
{
    $self = htmlentities($_SERVER['PHP_SELF']);
    echo("<form action = '$self' method='POST'>
      <fieldset>
        <legend>Place Your Order</legend>

      <p>Size:</p>
      <input type = 'radio' name='size' value = 'small'>Small $5<br>
      <input type = 'radio' name='size' value = 'medium'>Medium $10<br>
      <input type = 'radio' name='size' value = 'large'>Large $15<br>
      
      <p>Please Select Your Toppings($1 per topping):</p>
      <input type = 'checkbox' name='toppings[]' value = 'pepperoni'>Pepporoni<br>
      <input type = 'checkbox' name='toppings[]' value = 'mushrooms'>Mushrooms<br>
      <input type = 'checkbox' name='toppings[]' value = 'capsicum'>Capsicum<br>
      <input type = 'checkbox' name='toppings[]' value = 'olives'>Olives<br>
      <input type = 'checkbox' name='toppings[]' value = 'anchovies'>Anchovies<br>

      <p>Delivery Address
      <input type='text' name='address'>
      <br>
      <input type='submit' name='submit' value = 'Send Order'>
      </fieldset>
      </form>");	
}
?>
</body>
</html>