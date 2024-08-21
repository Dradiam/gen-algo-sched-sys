<?php

    function crossover($A, $B) {
        
        $subsetA = array_rand($A, 3);
        $subsetB = array_rand($B, 2);

        $offspring = [];
        
        foreach ($subsetA as $key) {
            $offspring[$key] = $A[$key];
        }
        
        foreach ($subsetB as $key) {
            $offspring[$key] = $B[$key];
        }

        $offspring = array_slice($offspring, 0, 5);
        
        return $offspring;
        
    }

?>
