<?php

/*
 * Merge Sort Algorithm
 * 
 * Merge sort is a sorting technique based on divide and conquer technique. 
 * 
 * Merge sort divides the whole array *iteratively* into equal halves. 
 * 
 * Merge sort keeps on dividing the list into equal halves until it can no more be divided 
 * and then combines them in a sorted manner.
 * 
 * With worst-case time complexity being Ο(n log n), it is one of the most respected algorithms.
 * 
 */ 

function merge_sort( $arr ) {
    $arr_size = count( $arr );

   if( $arr_size == 1 ) {
       return $arr;
   }

   // Split the array.

   $midpoint  = floor( $arr_size / 2 );
   $left_arr  = array_slice( $arr, 0, $midpoint );
   $right_arr = array_slice( $arr, $midpoint );

   // Recursively split the array. 
   // The recursion will stop once all the values are separated individually.
   // Hence, the initial if statement.

   $left  = merge_sort( $left_arr );
   $right = merge_sort( $right_arr );

   return merge( $left, $right );
}

function merge( $left, $right ) {
    $merged_arr = array();

    // Compare the 2 chunks and push sorted values in a new array. 

    while( count( $left ) && count( $right ) ) {
        if( $left[0] < $right[0] ) {
            array_push( $merged_arr, $left[0] );
            array_shift( $left );
        } else {
            array_push( $merged_arr, $right[0] );
            array_shift( $right );
        }
    }

    // After the comparison, the left and/or the right chunk might have values that were not pushed to the new array . 
    // Push those values to the new array.

    while( count( $left ) > 0 ) {
        array_push( $merged_arr, $left[0] );
        array_shift( $left );
    }
    
    while( count( $right ) > 0 ) {
        array_push( $merged_arr, $right[0] );
        array_shift( $right );
    }

    return $merged_arr;
}

$sample_arr = [40,14,33,27,35,10,1,40,40,23,234,567,15,8965,10,2,345];
$sorted_arr = merge_sort( $sample_arr );

echo "Before sorting:<pre>";
print_r( $sample_arr ); 

echo "</pre>After sorting<pre>";
print_r( $sorted_arr );

?>