<?php


$html =<<<EOD
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./images/logo.ico" type="image/x-icon">

    <title>Tansag</title>
</head>

<body>
<!-- Nav tabs -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img id="logo" src="./images/logo.svg" alt="Logga">
        </a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Hem
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#products">Produkter</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- slut Nav tabs -->
EOD;

if(empty($_POST)){
$html .= <<<EOD
    <div class="alert alert-danger" role="alert">
        <h1> Du måste välja en produkt</h1>
        <p>Följ länken <a href="index.php">här</a> för att beställa</p>
    </div>
    </body>
</html>
EOD;

}else{

$mail = 'lars.weingartner@yh.nackademin.se';
$msg = $_POST['product_name'] . "\n" . $_POST['product_price'] . "SEK\n";
$msg .= $_POST['first_name'] . " " . $_POST['second_name'] . "\n" . $_POST['street_adress'] . "\n" .$_POST['postal_adress'] . "\n";
$msg .= $_POST['message'] . "\n";

mail($_POST['email'], 'Beställning', $msg);
mail($mail, 'Beställning', $msg);
$html.=<<<EOD
    
    <!-- Bekräftelse -->

    <div class="container">
    <h1>Tack!</h1>
    <h2>Din beställning är mottagen!</h2>
    <p>
        Följande information har mottagits och skickas till din adress.<br>
        Ett mail med följande information har skickats till <strong>{$_POST['email']}</strong>
    </p>
    
    <p>
        {$_POST['first_name']} 
        {$_POST['second_name']} <br>
        {$_POST['street_adress']} <br>
        {$_POST['postal_adress']} <br>
        {$_POST['message']}


    </div>

    <!-- Slut Bekräftelse -->



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
EOD;
}
echo $html;

exit;
?>
