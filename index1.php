<?php
$numbers = [];
for($i = 0; $i < 100; $i++)
{
    $numbers[] = rand (1, 1000);
}
echo "Generate Numbers: ".implode(", " $numbers). "<br>";
$maxNumbers = max($maxNumbers);
$minNumbers = min($minNumbers);
echo "Max Number: $maxNumbers<br>";
echo "Min Number: $maxNumbers<br>";
?>