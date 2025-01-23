<?php 

interface A 
{
     function Test();
}
class Test 
{
      function info()
      {
         echo "<br>i am in info function";
      }
}
class Pankaj extends Test implements A
{
     function chd()
     {
         echo "<br>i am in chd function";
     }
     function Test()
     {
         echo "<br>i am in test Function";
     }
}
$obj=new Pankaj();
$obj->info();
$obj->chd();
$obj->Test();

?>