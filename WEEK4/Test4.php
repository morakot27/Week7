<!DOCTYPE html>
<html>
<head>
<title>Week 4 - Task 2</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>



<?php

 
            
class transaction {
  // Properties
  public $item;
  public $price;
  public $quantity;
  public $method;


  // Methods
  
  function set_item($item) {
    $this->item = $item;
  }
  function get_item() {
    return $this->item;
  }
  
  function set_price($price) {
    $this->price = $price;
  }
  function get_price() {
    return $this->price;
  }
  
  function set_quantity($quantity) {
    $this->quantity = $quantity;
  }
  function get_quantity() {
    return $this->quantity;
  }
  
  function set_method($method) {
    $this->method = $method;
  }
  function get_method() {
    return $this->method;
  }
}


  for ($i = 0 ; $i <= 8 ; $i ++){
	switch($this -> method){
        case 'ABA':
            $result = $this ->quantity * $result;
            return  $result;

            case 'Wing':
                $result = $this ->quantity * $result;
                return  $result;
            
            case 'Pipay':
                $result = $this ->quantity * $result;
                return  $result;
           
        }
        
    }        
    $array =[[item,5,1,'ABA'],
          [item,3,2,'Wing'],
          [item,4,1,'ABA'],
          [item,5,1,'ABA'],
          [item,6,1,'Pipay'], 
          [item,10,1,'ABA'],
          [item,15,1,'Wing'],
          [item,2,1,'Wing']]

?>
</body>
</html>