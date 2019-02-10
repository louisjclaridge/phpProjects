<?php
//Including the class file, which is present in another PHP file
include("testClass.php");

//Instanciating the class with some preset values
$test = new Test("Firstname", "Lastname");

//Getting the output from the classes getFullName() method.
$output = $test->getFullName();

//echoing the output
echo $output;

?>