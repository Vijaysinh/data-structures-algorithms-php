<!-- 
You are given an n x n 2D matrix.
Rotate array by 90 degrees (clockwise).

Input
a = [[1, 2, 3],
     [4, 5, 6],
     [7, 8, 9]]

Output should be
rotateArray(a) =
    [[7, 4, 1],
     [8, 5, 2],
     [9, 6, 3]] 
    
-->
<?php
$input =[[1, 2, 3],
         [4, 5, 6],
         [7, 8, 9]];

print_r(rotateArray($input));

function rotateArray($a) {
    $a = array_reverse($a);
    $t = [];
    foreach($a as $val){
        foreach($val as $k=>$v){
            $t[$k][] = $val[$k];      
        }
    }
    return $t;
}
?>