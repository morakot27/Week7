

<?php
/* Multiple inheritance refers to a system by 
which a subclass may be originated from more 
than one super-class. It has the advantage of 
allowing a class to inherit the features of more 
than one base class, but it has the drawback of 
causing a lot of uncertainty when two base classes 
adopt the same form under the same name. */

  
interface A {
   public function insideA();
}
  
interface B {
   public function insideB();
}
  
class Multiple implements B, A{
  
    
    function insideB() {
        echo "<br>Students enroll in class B <br>";
    }
  
    // Function of the interface C
    function insideA() {
        echo "<br>Students enroll in class A <br> ";
    }
  
    public function insidemultiple()
    {
        echo "<br>Student enroll in both class";
    }
}
  
$geeks = new multiple();
$geeks->insideA();
$geeks->insideB();
$geeks->insidemultiple();
?>