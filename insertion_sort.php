<?php

/*
 * Insertion Sort Algorithm
 * 
 * This is an in-place comparison-based sorting algorithm.
 * 
 * It is an efficient algorithm for sorting a small number of elements.
 * 
 * The insertion sort algorithm is an algorithm that is used by people in their everyday life than other algorithms. 
 * Take playing cards as an example, we take one card at a time from the pack and insert it into the correct position in our hand. 
 * To find the correct position for a card, we compare it with each of the cards already present in hand.
 * 
 * In this algorithm, a sub-list is maintained which is always sorted.
 * 
 * An element which is to be inserted in this sorted sub-list has to find its appropriate place 
 * and then it has to be inserted there. Hence the name, insertion sort.
 * 
 * The array is searched sequentially and unsorted items are moved and inserted into the sorted sub-list.
 * 
 * While working with small arrays Insertion sort is one of the fastest algorithms, even faster than Quick sort.
 * 
 * This algorithm is not suitable for large data sets as its average and worst case complexity are of Ο(n^2).
 * 
 */


function insertion_sort( $arr ) {
    $temp       = 0;
    $arr_size   = count( $arr ) - 1;

    for( $i = 0; $i < $arr_size; $i++ ) {
        if( $arr[$i] > $arr[$i+1] ) {
            $temp       = $arr[$i];
            $arr[$i]    = $arr[$i+1];
            $arr[$i+1]  = $temp;
        }

        for( $j = $i; $j > 0; $j-- ) {
            if( $arr[$j] < $arr[$j-1] ) {
                $temp       = $arr[$j];
                $arr[$j]    = $arr[$j-1];
                $arr[$j-1]  = $temp;
            }
        }
    }

    return $arr;
}

$sample_arr = [14,33,27,35,10,1,40,23,234,567,15,8965,345];
$sorted_arr = insertion_sort( $sample_arr );

echo "Before sorting:<pre>";
print_r( $sample_arr );

echo "</pre>After sorting<pre>";
print_r( $sorted_arr );
?>