<?php 
	
	$targetPath = 'uploads/';
	
	//if our targetPath Doesn't Exist - make it.
	if( !is_dir($targetPath) ) mkdir($targetPath, 0755);
	
	//get all of our post data
	$personsName = trim( $_POST['fname'] );
	$personsEmail = trim($_POST['email']);
	$personsSite = trim($_POST['site']);
	$personsTwitter = trim($_POST['twitter']);
	$theMessage = trim($_POST['message']);
	
	$filename = 'entries.txt';
	
	//get our date from PHP
	$date = date('M jS, Y');
	//$date = new DateTime();
	
	//the formatted content we will write into our file
	$entry = "\n".$date." ".$personsName."\n".$personsEmail."\n".$personsSite."\n".$personsTwitter."\n".$theMessage."\n"; 
	
	//creating a full path same as $targetPath = $targetPath.$filename;
	$targetPath .= $filename;
	
	//open a document to append it
	// if it doesn't exist create it
	$document = fopen($targetPath, 'a');
	fwrite($document, $entry);
	//$contents = fread($document);
	
	fclose($document);
	
	//echo $contents;
	
	
?>