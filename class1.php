<?php

class A // A is a parent class
{
     function Test()
     {
         
          echo "<br>I am In Test Function";
     }   
}
class B extends A   // extends means you are inherit from A class
{
     function Bye()
     {
           $this->Test();
          echo "<br>I am in Bye Function";
     }
}
 
$chd=new B();
$chd->Bye();
//$chd->Test();
?>