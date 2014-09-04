<?php
$N = 1234;
if ($N < 102) {
    echo 'no';
}


for ($i = 102; $i <= $N; $i++) {
    $testDigit = $i;
    $firstDigit = $testDigit % 10;
    $testDigit /= 10;
    $secondDigit = $testDigit % 10;
    $testDigit /= 10;
    $thirdDigit = $testDigit % 10;
    $testDigit /= 10;
    if ($firstDigit == $secondDigit || $firstDigit == $thirdDigit || $secondDigit == $thirdDigit) {

    } else {
        echo "$i, ";
    }

}


?>