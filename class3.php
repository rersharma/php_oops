<?php 

class A 
{
      function m()
      {
         echo "<br>I am in m function of class A";
      }
}
class B extends A 
{
      function K()
      {
         echo "<br>I am in K function";
      }
}

class c extends A 
{
     function S()
     {
          echo "<br>I am in S function";
     }
}

$obj=new B();
$obj->K();
$obj->m();
$obj1=new c();
echo "<br>--------------------------";
$obj1->S();
$obj1->m()

?>