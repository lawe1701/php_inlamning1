<?php
// ===========================================================================================
//
// Hangman.php
//
// Description: Play the classic game of hangman.
//
// Author: Lars Weingartner
//


// -------------------------------------------------------------------------------------------
//
// Error handling on/off
//
error_reporting(E_ALL|E_STRICT);
$debug = "";
//$debugEnable = TRUE;

// -------------------------------------------------------------------------------------------
//
// Take care of GET variables
//

if (empty($_POST['char'])){
	$char = "";
}else{
	$char = $_POST['char'];
}

if (!isset($_POST['word'])){	
	$word = rand(0, 11);
}else{
	$word = $_POST['word'];
}

if (empty($_POST['guessed'])){
	$guessed = "";
}else{
	$guessed = $_POST['guessed'];
}

if (isset($_POST['debug'])){
	$debugChecked = "checked='checked'";
	$debugEnable = TRUE;
}else{
	$debugChecked = "";
	$debugEnable = FALSE;
}
	

$debug .= '{char}<br />';
$debug .= '{word}<br />';
$debug .= '{guessed}<br />';

$guessed .= $char;
$guessed = count_chars($guessed, 3);

// -------------------------------------------------------------------------------------------
//
// Create a wordlist and pick the word.
//

$words = Array(
	'späckhuggare',
	'vedträ',
	'släggyxhuvud',
	'geologiprofessoraspirant',
	'vask',
	'hink',
	'filmprodusentassistent',
	'kycklinglever',
	'påse',
	'linuxanvändare',
	'rabarber',
	'frisersalong'
	);
	
$theWord = $words[$word];

$debug .= "Valt ord: '{$theWord}'<br />";


// -------------------------------------------------------------------------------------------
//
// Show the string and the chars that are correct, else -
//

$currentWord 	= "";

for($i=0; $i<strlen($theWord); $i++) {
	if(stripos($guessed, $theWord[$i]) === FALSE) { 
		$currentWord .= '-';
	} else {
		$currentWord .= $theWord[$i];
	}
}

// -------------------------------------------------------------------------------------------
//
// Check state of game:
// count number of failed attempts
//

$charsGuessed = strlen(count_chars($guessed, 3));
$charsHit 		= strlen(count_chars((str_replace('-', '', $currentWord)), 3));
$failed = $charsGuessed - $charsHit;

$debug .= $failed . $charsGuessed . $charsHit;

// -------------------------------------------------------------------------------------------
//
// Check state of game:
// if all chars are right, then success!
//

$gameOverMessage = "";

if ($currentWord == $theWord) {
	$gameOverMessage = "Grattis!! Du räddade Mr Hangman";
	$debug .= "JA";
}

// -------------------------------------------------------------------------------------------
//
// Check state of game:
// if failed nine times, then hanged, game over.
//
if ($failed >= 9) {
	$gameOverMessage = "Tyvärr, må Hangman vila i frid!";
	$debug .= "NEJ";
}

// -------------------------------------------------------------------------------------------
//
// Create a form for managing input.
//
if (($failed >= 9) OR ($currentWord === $theWord)) {
$form = <<< EOD
	<div>
	<p style='font-size: x-large; color: red'>$gameOverMessage</p>
	<a href = '{$_SERVER['PHP_SELF']}'>Starta om</a>
	</div>	
EOD;
}else{
$form = <<< EOD
<form action = 'hangman.php' method = 'post'>
<p style='font-family: monospace; font-size: xx-large; text-transform: uppercase;'>	{$currentWord} ({$guessed})</p>
	<div>
		<input type = 'hidden' name = 'word' value = '{$word}' />
		<input type = 'hidden' name = 'guessed' value = '{$guessed}' />
		<input type = 'text' name = 'char' size = '1' maxlength = '1' />
		<button type = 'submit'>Gissa</button>	
		<a href = '{$_SERVER['PHP_SELF']}'>Starta om</a> <br /><br />
		<input type = 'checkbox' name = 'debug' value = '{$debugEnable}' {$debugChecked} />Debug
	</div>
	<p style='font-size: x-large; color: red'>$gameOverMessage</p>
</form>
EOD;
}

// -------------------------------------------------------------------------------------------
//
// Create html for drawing the hanging man.
//
require_once('CHangmanSVG.php');
$hangman = new CHangmanSVG();
$svgCode = $hangman->DrawPartsOfPicture($failed);  // Kolla även här
//$svgCode = $hangman->DrawHuvud();

// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');
$charset 	= "iso-8859-1";
$language	= "sv";
$title		= "Hänga Gubben";
$debug 		= $debugEnable ? $debug : "";

$html = <<< EOD
<?xml version="1.0" encoding="{$charset}" ?> 
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">  
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset={$charset};" />
		<title>{$title}</title>
	</head>
	<body>
		{$header}
		<h1>Spelet hänga gubbe</h1>
		<p>Njut av ett trevligt spel.</p>
		<fieldset>
			<div style='float: left'>
				{$form}		
			</div>
			<div style='float: right'>
				{$svgCode}
			</div>
		</fieldset>
		<div>
			{$debug}
		</div>
			{$footer}
	</body>
</html>
EOD;


header("Content-Type: application/xhtml+xml; charset={$charset}");
echo $html;
exit;

?>