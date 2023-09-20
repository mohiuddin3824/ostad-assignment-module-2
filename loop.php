<?php

// Print all even numbers betwin 1-20 using for loop in a function
echo "=== Even numbers using using for loop in a function ==<br>";
    function evenOrOdd($start, $end){
        for ($i=$start; $i <= $end ; $i++) { 
            if ( $i % 2 == 0 ) {
                echo $i . "<br>";
            }
        }
    }

    evenOrOdd(1, 20);

    echo "<br>";

// Print all even numbers betwin 1-20 using while loop without function
echo "=== Even numbers using while loop ==<br>";

    $x = 1;
    while ($x <= 20) {
        if ( $x % 2 == 0 ) {
            echo $x ."<br>";
            
        }
        $x++;
    }

    echo "<br>";

// Print all even numbers betwin 1-20 using while loop in a function
    echo "=== Even numbers using while loop in a function ==<br>";
    function evenOdd($start, $end){
        $g = $start;
        while ($g <= $end) {
            if ($g % 2 == 0) {
                echo $g . "<br>";
            }
            $g++;
        }
    }
    evenOdd(1, 20);

    echo "<br>";
    

// Print all even numbers betwin 1-20 using do while loop without function
echo "== Even numbers using do while loop ==<br>";

    $y = 1;
    do {
        if ($y % 2 ==0) {
            echo $y . "<br>";
        }
        $y++;
    } while ($y <= 20);


// Print all even numbers betwin 1-20 using do while loop in a function
echo "== Even numbers using do while loop in a function ==<br>";

function checkEvenOdd($start, $end){
    $z = $start;
    do {
        if ($z % 2 == 0) {
            echo $z . "<br>";
        }
        $z++;
    } while ($z <= $end);
}

checkEvenOdd(1, 20);
