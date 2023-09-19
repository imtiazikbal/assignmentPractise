<?php
// Function to calculate the nth Fibonacci number
function fibonacci( $n ) {
    if ( $n <= 1 ) {
        return $n;
    } else {
        return fibonacci( $n - 1 ) + fibonacci( $n - 2 );
    }
}

// Initialize variables

$first  = 0;
$second = 1;
for ( $i = 1; $i <= 10; $i++ ) {
    $next = $first + $second;
    if ( $next > 100 ) {
        break;
    } 
    echo $first. " ".$next . " ";
    $first  = $second;
    $second = $next;
}
?>
