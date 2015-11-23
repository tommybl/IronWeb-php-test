<?php

    // Done in 15 min, trying to find the fastest and most precise algorithm

    $numbers = array(1,2,4,7,1,6,2,8);
    $sets = array(array(), array(), array());
    $sums = array(0, 0, 0);
    
    rsort($numbers); // Reverse sort for a better precision (biggest numbers will be processed first)
    
    // For each number in the array: we take the group with the smallest sum and had the num to it
    foreach ($numbers as $num) {
        $index = array_keys($sums, min($sums))[0];
        $sets[$index][] = $num;
        $sums[$index] += $num;
    }
    
    // OUTPUT
    echo "## REVERSE SORT ##";
    var_dump($numbers);
    echo "## GROUPS SETS ##";
    foreach ($sets as $set) {
        var_dump($set);
        echo "## SUM: " . array_sum($set) . " ##";
    }

?>
