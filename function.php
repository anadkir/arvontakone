<?php
    $computerNumbers = [];
    $same = [];
    $userNumbers = '';
    $generateNumbers = '';
    $result = 0;
    $sameNumbers = '';
    $resultPercentage = '';
    $numbersCount = 0;

    if (isset($_POST['numbers'])){

        $numbers = $_POST['numbers'];
        $numbersCount = count($numbers);

        if ($numbersCount == 6) {

            $userNumbers = implode(", ", $numbers);

            while (Count($computerNumbers) < 6) {
                $rand = rand(1, 30);
                if (!in_array($rand, $computerNumbers)) {
                    $computerNumbers[] = $rand;
                }
            }
            $generateNumbers = implode(", ", $computerNumbers);

            foreach ($computerNumbers as $num) {
                if (in_array($num, $numbers)) {
                    $result++;
                    $same[] = $num;
                }
            }

            $sameNumbers = implode(", ", $same);

            $resultPercentage = $result / 6 * 100;
        }

    }