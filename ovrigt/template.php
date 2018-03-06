<?php
// ========================================================
// template.php
// Description: My template
// Author: Lars Weingartner
// --------------------------------------------------------
// Content of page
// --------------------------------------------------------
$html = <<<MainText
	<h1>Skriv in rubrik här</h1>
	<p>
	Skriv in text!
	</p>

MainText;
// --------------------------------------------------------
// Print out
// --------------------------------------------------------

require_once('common.php');
$title = "Lasses template";
$charset = "UTF-8";
$language = "sv";


$html = <<<EOD
<!DOCTYPE html>
<html lang="{$language}">


	<head>
	<meta charset="{$charset}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="inlamning.css">
	<title>{$title}</title>
	
	</head>

	<body>
		{$header}	
		{$html}
		{$footer}
	</body>	
</html>
EOD;

echo $html;
exit;
?>

