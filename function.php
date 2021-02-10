<?php
    $numbers = $_POST['numbers'];

    if (count($numbers) > 6){
        //output
    }

    $userNumbers = implode(", ", $numbers);
    $computerNumbers = [];
    $same = [];

    while (Count($computerNumbers) < 6){
        $rand = rand(1, 30);
        if (!in_array($rand, $computerNumbers)){
            $computerNumbers[] = $rand;
        }
    }
    $generateNumbers = implode(", ", $computerNumbers);

    $result = 0;
    foreach ($computerNumbers as $num){
        if (in_array($num, $numbers)){
            $result++;
            $same[] = $num;
        }
    }

    $sameNumbers = implode(", ", $same);

    $resultPercentage = $result / 6 * 100;