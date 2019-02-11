<form method="post">
<p>Text to save</p>
<input type="text" name="textIn">
<input type="submit">
</form>

<?php 
$textin = $_POST['textIn'] . "\n";

$file = fopen("saveText.txt", "a+");

fwrite($file, $textin);

fclose($file);

?>
<p>Current contents of file..</p>
<input type="submit" value="Clear file">

<?php
$file = fopen("saveText.txt", "r");

$filesize = filesize("saveText.txt");

	while(!feof($file))
	{
		$fileContents = fgets($file);
		echo $fileContents . "<br>";
	}

?>
