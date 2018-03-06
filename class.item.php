<?php

class Item{
    private $name;
    private $price;
    private $image;
    private $bye_btn;

    function __construct($name, $price, $image){
        $this->setName($name);
        $this->setPrice($price);
        $this->setImage($image);
        $this->setByeBtn();
        
    }

// Setters
    public function setName($name){
        $this->name = $name;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setByeBtn(){
        $Bye_btn  = <<<EOD
        <form id="bye" action="./order.php" method="post" target="_self" >
            <input type="hidden" name="product_name" value="$this->name">
            <input type="hidden" name="product_price" value="$this->price">
            <input type="hidden" name="product_img" value="$this->image">
            <input type="submit" value="köp">
        </form>
EOD;
        $this->bye_btn = $Bye_btn;
    }

    
// Getters
    public function getName(){
        return $this->name;
    }
    public function getImage(){
        return $this->image;
    }
    public function getPrice(){
       return $this->price;
    }
    public function getByeBtn(){
       return $this->bye_btn;
    }
}

// $items = array();

// $item1 = new Item("Halsband Turmalin", 3810, "<img class='product' src='./images/0006.jpg' alt='Bild på halsband'>");
// $item2 = new Item("Hänge Ametist", 119, "<img class='product' src='./images/0057.jpg' alt='Bild på Hänge'>");
// $item3 = new Item("Armband Tigeröga", 690, "<img class='product' src='./images/0025.jpg' alt='Bild på Armband'>");

//$item1 = new Item("Halsband Turmalin", 3810, "./images/0006.jpg");
// $item2 = new Item("Hänge Ametist", 119, "./images/0057.jpg");
// $item3 = new Item("Armband Tigeröga", 690, "./images/0025.jpg");

// $items = array();
// array_push($items, new Item("Halsband Turmalin", 3810, "./images/0006.jpg"));
// array_push($items, new Item("Hänge Ametist", 119, "./images/0057.jpg"));
// array_push($items, new Item("Armband Tigeröga", 690, "./images/0025.jpg"));

  ?>