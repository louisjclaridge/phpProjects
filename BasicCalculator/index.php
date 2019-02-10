<html>
<head>
</head>
<body>
<form method="post">	
<input name="number1" type="number">
<input name="number2" type="number">
<br>
<input type="submit">
</form>

<?php
//Grabs numbers from the HTML form using POST
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];

//adds the numbers together
$output = $number1 + $number2;

//does a check to see if the field is equal to 0 or null
if(empty($output) == false)
{
//outputing the final result
echo $output;
}
else if
{
	echo "invalid number"; //default output if the field is empty
}
?>
</body>
</html>