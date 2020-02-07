<?php
    $Divisor = $_GET["Divisor"];

    if($Divisor % 10 == 0){
        echo "<h1> E divisivel por 10</h1>";
    }
    elseif($Divisor % 5 == 0){
        echo "<h1> E divisivel por 5</h1>";

    }
    elseif($Divisor % 2 == 0){
        echo "<h1> E divisivel por 2</h2>";
    }
    else{
        echo "<h1> Nao é divisivel por 10, 5 e nem por 2.</h1>";
    }

?>
