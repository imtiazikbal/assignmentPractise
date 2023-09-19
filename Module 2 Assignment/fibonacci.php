<?php
function printFibonacci($count) {
    $fibonacci = [];
    
    // First two numbers in the Fibonacci series
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $count; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    // Print the first $count Fibonacci numbers
    for ($i = 0; $i < $count; $i++) {
        echo $fibonacci[$i];
        if ($i < $count - 1) {
            echo ", ";
        }
    }
}

// Call the function with 15 as an argument to print the first 15 Fibonacci numbers
printFibonacci(15);
