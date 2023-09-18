<?php


function fibonacci($n){
     if($n == 0){
         return 1;
     }

      return  $n + fibonacci($n + 1);
       

}
 $result = fibonacci(4);
 echo $result;