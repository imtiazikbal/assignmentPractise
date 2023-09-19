<?php

//Step Two using start and end, step argument

function evenNumberPrint($start, $end, $step){

    $count = $start;
    while($count<=$end){
        echo $count;
        echo"\n";
        $count = $count +$step;
    }
    
}
evenNumberPrint(2,20,2);

