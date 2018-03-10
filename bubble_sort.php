<?php

/*
 * Bubble Sort Algorithm
 * 
 * This sorting algorithm is comparison-based algorithm in which each pair of adjacent elements is compared 
 * and the elements are swapped if they are not in order. 
 * 
 * It is an in-place sorting algorithm. It does not require additional memory/space for sorting. 
 * 
 * Bubble sort starts with very first two elements, comparing them to check which one is greater. 
 * 
 * Bubble Sort compares each pair of array element unless the whole array is completely sorted in an ascending order. 
 * 
 * This may cause a few complexity issues like what if the array needs no more swapping as all the elements are already ascending.
 * 
 * To ease-out the issue, we use one flag variable *swapped* which will help us see if any swap has happened or not. 
 * 
 * If no swap has occurred, i.e. the array requires no more processing to be sorted, it will come out of the loop.
 * 
 * After every iteration, the highest values settles down at the end of the array. 
 * Hence, the next iteration need not include already sorted elements.
 * So, for each inner iteration we can reduce the size of the array.
 * 
 * Sometimes referred to as "sinking sort". 
 * The algorithm gets its name from the way smaller elements “bubble” to the top of the list.
 * 
 * This algorithm is not suitable for large data sets as its average and worst case complexity are of Ο(n^2) where n is the number of items.
 * 
 */

function bubble_sort( $arr ) {
    $temp       = 0;
    $arr_size   = count( $arr ) - 1;
 
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