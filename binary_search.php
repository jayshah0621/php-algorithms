<?php
/*
 * Binary Search Algorithm
 * 
 * Binary search is a fast search algorithm with run-time complexity of Ο(log n). 
 * 
 * This search algorithm works on the principle of divide and conquer. 
 * 
 * For this algorithm to work properly, the data collection should be in the sorted form.
 * 
 * Binary search looks for a particular item by comparing the middle most item of the collection. 
 * If a match occurs, then the index of item is returned. 
 * If the middle item is greater than the item, then the item is searched in the sub-array to the left of the middle item. 
 * Otherwise, the item is searched for in the sub-array to the right of the middle item. 
 * This process continues on the sub-array as well until the size of the subarray reduces to zero.
 * 
 */ 


function binary_search( $arr, $search_val, $start_pos = null, $end_pos = null ) {
    // Implementation method 1 - Recursion

    /*if( $start_pos === null ) {
        $start_pos = key( $arr );
    }

    if( $end_pos === null ) {
        end( $arr );
        $end_pos = key( $arr );
        reset( $arr );
    } 

    $midpoint = floor( ( $start_pos + $end_pos ) / 2 );

    if( $start_pos == $end_pos && $arr[$midpoint] != $search_val ) {
        return "$search_val not found in the list.";
    } else if( $arr[$midpoint] == $search_val ) {
        return "$search_val found at position: $midpoint.";
    } else if( $search_val < $arr[$midpoint] ) {
        // search to the left side of the array
        return binary_search( $arr, $search_val, $start_pos, $midpoint - 1 );   
    } else {
        // search to the right side of the array
        return binary_search( $arr, $search_val, $midpoint + 1, $end_pos );
    }*/


    // Implementation method 2 - Iteration

    $start_pos = key( $arr );
    
    end( $arr ); // To fetch the last key of array, first set the array pointer to the last element.
    
    $end_pos = key( $arr );
    
    reset( $arr ); // Without this statement, the array pointer will remain at the last element and the following code won't run properly. 

    while( true ) {
        if( $start_pos > $end_pos ) {
            return "$search_val not found in the list.";
        }

        $midpoint = floor( ( $start_pos + $end_pos ) / 2 );

        if( $arr[$midpoint] == $search_val ) {
            return "$search_val found at position: $midpoint."; 
        }

        if( $search_val < $arr[$midpoint] ) {
            // search to the left side of the array
            $end_pos = $midpoint - 1;
        } else {
            // search to the right side of the array
            $start_pos = $midpoint + 1;
        }
    }
}

$search_val     = 92;
$sample_arr     = [10,14,19,26,27,31,50,78,92];
$search_result  = binary_search( $sample_arr, $search_val );

echo "List<pre>";

print_r( $sample_arr );

echo "</pre><br><br>";

echo $search_result;

?>