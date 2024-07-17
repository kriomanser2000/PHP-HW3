<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$number = 347689;
$digits = str_split($number);
$count = count($digits);
$maxDigit = max($digits);
$minDigit = min($digits);
$sum = array_sum($digits);
$average = $sum / $count;
echo "Number: $number<br>";
echo "Digits: " . implode(", ", $digits) . "<br>";
echo "Count: $count<br>";
echo "Max Digit: $maxDigit<br>";
echo "Min Digit: $minDigit<br>";
echo "Sum: $sum<br>";
echo "Average: " . round($average, 2) . "<br>";
?>
</body>
</html>