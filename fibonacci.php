<?php
echo "Task 4 Print fibonacci seris using function <br />";
function fibonacci($start, $end){
    $veryOld = $start;
    $old = 1;
    $new = 1;
    
    for ($i=0; $i <$end ; $i++) { 
        echo $veryOld . "<br />";
        $old = $new;
        $new = $old+$veryOld;
        $veryOld = $old;
    }
    
}
fibonacci(0,15);

echo "<br />";
echo "Task 4 Print fibonacci seris using recursive function <br />";

function fibonacciRecursive($old, $new, $end){
    static $start;
    $start = $start ?? 1;

    if ($start>$end) {
        return;
    }
    $start++;

    echo $old . "<br />";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacciRecursive($old, $new, $end);

}

fibonacciRecursive(0,1,15);

echo "<br />";

echo "Task 3 Print fibonacci seris using function with break statement <br />";
function fibonacciBreak($start, $end){
    $veryOld = $start;
    $old = 1;
    $new = 1;
    
    for ($i=0; $i <$end ; $i++) { 
        if ($veryOld>100) {
            break;
        }
        echo $veryOld . "<br />";
        $old = $new;
        $new = $old+$veryOld;
        $veryOld = $old;
    }
    
}
fibonacciBreak(0,20);