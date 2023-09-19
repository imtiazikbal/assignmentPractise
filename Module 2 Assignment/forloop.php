<?php 
function printEvenNumbersForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
    }
}

// Call the function to print even numbers
printEvenNumbersForLoop(2,20,2);
echo "\n";