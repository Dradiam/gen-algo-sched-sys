<?php

function selection($array) {

    $selectedGene = $array[array_rand($array)];

    if ($selectedGene !== null && is_array($selectedGene) && count($selectedGene) === 2) {

        $timeRange = $selectedGene[0];
        $days = $selectedGene[1];

        list($startTime, $endTime) = explode(' - ', $timeRange);

        return [trim($startTime), trim($endTime), $days];
        
    } else {
        
        return null;
        
    }
}
?>
