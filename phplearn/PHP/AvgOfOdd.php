<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function findPrimesAndSum($array) {
    $primeNumbers = array();
    $sum = 0;

    foreach ($array as $number) {
        if (isPrime($number)) {
            $primeNumbers[] = $number;
            $sum += $number;
        }
    }

    return array(
        'primeNumbers' => $primeNumbers,
        'sum' => $sum
    );
}


$array = array(2, 3, 4, 5, 6, 7, 8, 9, 10);
$result = findPrimesAndSum($array);

echo "Prime Numbers: " . implode(", ", $result['primeNumbers']) . "<br/>";
echo "Sum of Prime Numbers: " . $result['sum'] . "<br/>";

echo "<h1> Task 2 </h1>";

function printNumberPyramid($rows) {
    $num = 1;
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br/>";
    }
}


$rows = 5;
printNumberPyramid($rows);


?>
