<?php
require "class.item.php";


// Initierar array med objekten
$items = array();

array_push($items, new Item("Halsband Turmalin", 3810, "0006.jpg"));
array_push($items, new Item("Hänge Ametist", 119, "0057.jpg"));
array_push($items, new Item("Armband Tigeröga", 690, "0025.jpg"));


$html=<<<EOD
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
    <br>


    <div class="vid">
        <video autoplay loop>
            <source src="./images/tansag.mp4" type="video/mp4">Din browser kan inte visa filmen!</video>
    </div>

    <br>

    <div class="container" id="products">
        <div class="row">
EOD;
// var_dump($items);

//  print_r($items);

// foreach($items as $index){
    for{}

    //echo $index[0];
    //print_r($index);
            // $html .= "<div class='col-md-4' id='product'>";
            // $html .= "<h3 id='product'>{$item->$name}</h3>";
            // $html .= "{$item->$image}";
            // $html .= "<p id='product'>{$item->$price} SEK</p>";
            // $html .= "{$item->$bye_btn}";
            // $html .= "</div>";
}          
$html .= <<<EOD
        </div>
    </div>
        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
EOD;
$html .=<<<EOD
<div class="card text-left">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">Title</h4>
    <p class="card-text">Body</p>
  </div>
</div>
EOD;

echo $html;
exit;
?>