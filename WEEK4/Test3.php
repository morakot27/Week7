<?php include('conn.php'); session_start(); ?>
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




<body>
	<?php
    class sales_data{
        public $item;
        public $price;
        public $quantity;
        public $method;
        public $total;

        function __construct($item, $price, $quantity, $method, $total) {
            $this->item = $item;
            $this->price =$price;
            $this->quantity = $quantity;
            $this->method = $mehod;
            $this->total = $total;
          }
          /*function __destruct() {
            echo "item {$this->item}.";
          } */
    }
    
    $item1 = new sales_data ();
    $item1 = __construct ('item1','5','1', 'ABA', '5' );
    $item2 = new sales_data ();
    $item2 = __construct ('item2','3','2', 'Wing', '6' );
    $item3 = new sales_data ();
    $item3 = __construct ('item3','4','1', 'ABA', '4' );
    $item4 = new sales_data ();
    $item4 = __construct ('item4','5','1', 'ABA', '5' );
    $item5 = new sales_data ();
    $item5 = __construct ('item5','6','1', 'Pipay', '6' );
    $item6 = new sales_data ();
    $item6 = __construct ('item6','10','1', 'ABA', '10' );
    $item7 = new sales_data ();
    $item7 = __construct ('item7','15','1', 'Wing', '15' );
    $item8 = new sales_data ();
    $item8 = __construct ('item8','2','1', 'Wing', '2' );
    ?>
<?php
     echo "<th>$item1 ->item</th>";
     echo "<td>$item1 ->price</td>";
     echo "<td>$item1 ->quantity</td>";
     echo "<td>$item1 ->method</td>";
     echo "<td>$item1 ->total</td>";

?>
<?php
     echo "<th>$item2 ->item</th>";
     echo "<td>$item2 ->price</td>";
     echo "<td>$item2 ->quantity</td>";
     echo "<td>$item2->method</td>";
     echo "<td>$item2 ->total</td>";

?>
<?php
     echo "<th>$item3 ->item</th>";
     echo "<td>$item3 ->price</td>";
     echo "<td>$item3 ->quantity</td>";
     echo "<td>$item3 ->method</td>";
     echo "<td>$item3 ->total</td>";

?>
<?php
     echo "<th>$item4 ->item</th>";
     echo "<td>$item4 ->price</td>";
     echo "<td>$item4 ->quantity</td>";
     echo "<td>$item4 ->method</td>";
     echo "<td>$item4 ->total</td>";

?>



</body>
</html>