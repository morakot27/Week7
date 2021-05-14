<?php 

function sum(...$numbers) {
    $totalsum  = 0;
    foreach ($numbers as $num) {
        $totalsum += $num;
    }
     return echo "Totalsum = ".$totalsum.'<br>';
}
echo sum(2,3);
echo sum(2,3,4);
echo sum(2,3,4,5);
?>