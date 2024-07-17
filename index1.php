<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numbers = [];
for($i = 0; $i < 100; $i++)
{
    $numbers[] = rand (1, 1000);
}
echo "Generated Numbers: " . implode(", ", $numbers) . "<br>";
$maxNumbers = max($maxNumbers);
$minNumbers = min($minNumbers);
echo "Max Number: $maxNumbers<br>";
echo "Min Number: $maxNumbers<br>";
?>
</body>
</html>