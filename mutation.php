<?php

    function mutate($setAC, $setBD, $mutationRate) {

        $offspring = [];

        $crossoverKeys = array_rand($setAC, 3);
        $crossoverValues = array_rand($setBD, 2);

        foreach ($crossoverKeys as $key) {
            $offspring[] = [$setAC[$key][1], $setAC[$key][0]];
        }

        foreach ($crossoverValues as $value) {
            $offspring[] = [$setBD[$value][1], $setBD[$value][0]];
        }

        foreach ($offspring as &$slot) {
            if (mt_rand() / mt_getrandmax() < $mutationRate) {
                // Add ** at the end of the time range string
                $slot[1] .= '**';
            }
        }

        return $offspring;
    }

?>
