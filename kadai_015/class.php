<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題4 クラス</title>
 </head>
 
  <body>
     <p>
         <?php
 
 
            class Food {
               // プロパティを定義する                        
               private $name;
               private $price;
 
                // コンストラクタを定義する
               public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;

               }
             
               function show_price(){
                echo "$this->price<br>";
               }
            }
 
            class Animal {
               // プロパティを定義する                        
               private $name;
               private $height;
               private $weight;
 
                // コンストラクタを定義する
               public function __construct(string $name, int $height,int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;

               }
             
               function show_height(){
                echo "$this->height<br>";
               }
               
               
             }
             
             
             
         // インスタンス化する
         $MakeFood = new Food('potate', 250);
         $MakeAni = new Animal('dog', 60,5000);
         
         
 
         print_r($MakeFood);
         echo '<br>';
         print_r($MakeAni);
         echo '<br>';
         
         $MakeFood->show_price();
         $MakeAni->show_height();
          
 
          ?>
     </p>
    
 </body>
 
 </html>