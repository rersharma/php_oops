<?php 

   interface School
   {
       function student_branch(); // abstract method (function) are those which have no body
       function student_address();
   }

  class tenth implements School
   {
      function student_branch()
      {
          echo "Tenth class Total 20 student";
      }  
      function student_address()
      {
           echo "<br>All students belong to tricity";
      }
   }

   class twelve implements School
   {
    function student_branch()
    {
        echo "<br>Twelve class Total 20 student";
    }  
    function student_address()
    {
         echo "<br>All students belong to Ambala";
    }
   }

   $obj=new tenth();
   $obj->student_branch();
   $obj->student_address();

   $obj1=new twelve();
   $obj1->student_branch();
   $obj1->student_address();

  
?>