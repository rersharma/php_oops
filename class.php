<?php 

class Math 
{
   
     function Addition()  // default function bez the parameter is empty and we call it member function
     {
          echo "<br>I am in Addition Function";
     }

     function Subtract()
     {
         echo "<br>i am in Subtract Function";
     }
     function sum($a,$b) // formal parameter or you can say formal arguments
     {
         $c=$a+$b;
         echo "<br>Sum is $c";
     }
     function sub()
     {
          $a=12;
          $b=3;
          $c=$a-$b;
          return $c;
     }
}

$geetika=new Math(); // geetika is an object , new for insitilze your class memory and Math is the default constr
$geetika->Addition();
$geetika->Subtract();
$geetika->sum(12,3); // actual Parameter or you can say actual argument
$ans=$geetika->sub();
echo "<br>Subtraction result is $ans";
?>