<?php

function bubble_sort( $arr ) {
    $temp = 0;
    $arr_size = count($arr)-1;
 
    for( $i = 0, $k = $arr_size; $i < $arr_size, $k > 0; $i++, $k-- ) {
        $swapped = 0;
        
        for( $j = 0; $j < $k; $j++ ) {
            if( $arr[$j] > $arr[$j+1] ) {
                $temp       = $arr[$j];
                $arr[$j]    = $arr[$j+1];
                $arr[$j+1]  = $temp;
                $swapped    = 1;
            } 
        }

        //echo "i: $i, swapped: $swapped<br>";

        /*if no number was swapped that means 
        array is sorted now, break the loop.*/

        if( !$swapped ) {
            //echo "i: $i, swapped: $swapped<br>";
            break;
        }
    }
  
    return $arr;
}

$sample_arr = [14,33,27,35,10,1,40,23,234,567,15,8965,345];
$sorted_arr = bubble_sort( $sample_arr );

echo "Before sorting:<pre>";
print_r( $sample_arr ); 
echo "</pre>After sorting<pre>";
print_r( $sorted_arr );
?>