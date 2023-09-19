<?php

//Step Two using start and end, step argument

function evenNumberPrint($start, $end, $step){

    $count = $start;
    do{
        echo $count;
        echo"\n";
        $count = $count +$step;
    }while($count<=$end);
    
}
evenNumberPrint(2,20,2);

