<?php 

class data_sale {
    public $input;

    public function setInput($input) {
        $this->input = $input;
    }

    public function totalAbaSales(){
        $this->input;
        $saleABA = 0;
        for ($x=0;$x<count($this->input); $x++){
            if ($this->input[$x][3]=='ABA'){
                $saleABA += $this->input[$x][1] * $this->input[$x][2];
            }
        }
        return $saleABA;
    }

    public function totalWingSales(){
        $this->input;
        $saleWing = 0;
        for ($x=0;$x<count($this->input); $x++){
            if ($this->input[$x][3]=='Wing'){
                $saleWing += $this->input[$x][1] * $this->input[$x][2];
            }
        }
        return $saleWing;
    } 

    public function totalPiPaySales(){
        $this->input;
        $salePiPay = 0;
        for ($x=0;$x<count($this->input); $x++){
            if ($this->input[$x][3]=='PiPay'){
                $salePiPay += $this->input[$x][1] * $this->input[$x][2];
            }
        }
        return $salePiPay;
    } 

    public function sortTotal(){
        usort($this->input, function($a, $b) {
            return $b[4] <=> $a[4];
        });
    }


}

$newSale = new sale();
$newSale -> setInput(array(
    array('item 1', 5 , 1, 'ABA'  , 5),
    array('item 2', 3 , 2, 'Wing' , 6),
    array('item 3', 4 , 1, 'ABA'  , 4),
    array('item 4', 5 , 1, 'ABA'  , 5),
    array('item 5', 6 , 1, 'PiPay', 6),
    array('item 6', 10, 1, 'ABA'  , 10),
    array('item 7', 15, 1, 'Wing' , 15),
    array('item 8', 2 , 1, 'Wing' , 2)));
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Week 4</title>
  </head>
  <body>
  <table class="table table-striped container col-6 border mt-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Method</th>
      <th scope="col">Total</a>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
            for ($x=0;$x<8;$x++) {
                echo "<tr> </tr>";
                    for ($y=0;$y<5;$y++){
                        $newItem = $newSale->input[$x][$y];
                        echo "<td> $newItem </td>";
                    }
            }
        ?>  
    </tr>
  </tbody>
</table>

<h5 class="col-6 container"> <?php echo "Number of sales by ABA method: $" . $newSale->totalAbaSales(); ?></h5>
<h5 class="col-6 container"> <?php echo "Number of sales by PiPay and Wing method: $" . $newSale->totalWingSales() + $newSale->totalPiPaySales(); ?></h5>
<h5 class="col-6 container"> <?php echo "Display all sales ordering by biggest total amount." . $newSale->sortTotal() ?></h5>
<table class="table table-striped container col-6 border mt-4 mb-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Method</th>
      <th scope="col">Total</a>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
            for ($x=0;$x<8;$x++) {
                echo "<tr> </tr>";
                    for ($y=0;$y<5;$y++){
                        $newItem = $newSale->input[$x][$y];
                        echo "<td> $newItem </td>";
                    }
            }
        ?>  
    </tr>
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>