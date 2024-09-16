<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_016</title>
 </head>
 
 <body>
     <p>
         <?php
            //Food
            class Food{
                private $name;
                private $price;

                public function set_price(int $price){
                    $this -> price = $price;
                }
                public function show_price(){
                    echo $this -> price . '<br>';
                }

                public function __construct(string $name, int $price){
                    $this -> name = $name;
                    $this -> price = $price;
                }
            }

            //Animal
            class Animal{
                private $name;
                private $height;
                private $weight;

                public function set_height(int $height){
                    $this -> height = $height;
                }
                public function show_height(){
                    echo $this -> height . '<br>';
                }

                public function __construct(string $name, int $height, int $weight){
                    $this -> name = $name;
                    $this -> height = $height;
                    $this -> weight = $weight;
                }
            }

            $food = new Food('桃',800);
            $animal = new Animal('猫',50,3000);

            print_r($food);
            echo '<br>';
            print_r($animal);
            echo '<br>';

            $food -> show_price();
            $animal -> show_height();
       
         ?>
     </p>
 </body>
 
 </html>