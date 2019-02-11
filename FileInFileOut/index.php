<form method="post">
<p>Text to save</p>
<input type="text" name="textIn">
<input type="submit">
</form>

<?php 
//Getting test input, this also includes adding a line return so the file can be read line by line
$textin = $_POST['textIn'] . "\n";

//Opening the file stream and setting it to the read + write mode
$file = fopen("saveText.txt", "a+");

//Writing the text to the file
fwrite($file, $textin);

//Closing the file stream
fclose($file);

?>
<p>Current contents of file..</p>

<?php
//Opening the file stream and setting it to the read mode
$file = fopen("saveText.txt", "r");

//While loop to itterate through the file as long as the file stream hasn't reached the end of the file.
	while(!feof($file))
	{
		//gets the current line in the file
		$fileContents = fgets($file);
		//Echoing the current line
		echo $fileContents . "<br>";
	}

?>
