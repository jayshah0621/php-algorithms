<?php

/*
 * Selection Sort Algorithm
 * 
 * This sorting algorithm is an in-place comparison-based algorithm.
 * 
 * In this algorithm, the list is divided into two parts, the sorted part at the left end and the unsorted part at the right end. 
 * 
 * Initially, the sorted part is empty and the unsorted part is the entire list.
 * 
 * The smallest element is selected from the unsorted array and swapped with the leftmost element, 
 * and that element becomes a part of the sorted array. 
 * 
 * This process continues moving unsorted array boundary by one element to the right.
 * 
 * This algorithm is not suitable for large data sets as its average and worst case complexities are of Ο(n^2).
 * 
 * In my implementation, I have used array_slice with preserved keys as the array_search has to find the index of the minimum value.
 * 
 * If there are 2 similar values and the keys are not preserved then array_search will return the first index of similar values,
 * and the final result will not be a sorted array.
 * 
 */


function selection_sort( $arr ) {
    $arr_size   = count( $arr );

    for( $i = 0; $i < $arr_size - 1; $i++ ) {
        $sub_array  = array_slice( $arr, $i+1, NULL, TRUE );
        $min        = min( $sub_array );
        $min_index  = array_search( $min, $sub_array );

        if( $arr[$i] > $min ) {
            $temp            = $arr[$i];
            $arr[$i]         = $min;
            $arr[$min_index] = $temp;
        }
    }

    return $arr;
}

$sample_arr = [40,14,33,27,35,10,1,40,40,23,234,567,15,8965,10,2,345];
$sorted_arr = selection_sort( $sample_arr );

echo "Before sorting:<pre>";
print_r( $sample_arr ); 

echo "</pre>After sorting<pre>";
print_r( $sorted_arr );

?>