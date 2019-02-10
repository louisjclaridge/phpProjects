<?php
//Defining the class
class Test
{
	//defining the attributes the class will have, in this case its firstName and lastName
	var $firstname;
	var $lastname;

//Defining the base constructor for the class, this one takes an input for firstname and lastname
public function Test($first, $last)
{
	$this->firstname = $first;
	$this->lastName = $last;
}

public function getFullName()
{
	$output = $this->firstname . " " . $this->lastName;

	return $output;
}


}



?>
