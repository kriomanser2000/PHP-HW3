<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$initialAmount = 300;
$rate = 0.20;
$years = 20;
echo "<table border='1'><tr><th>Year</th><th>Amount</th><th>Profit</th></tr>";
for ($i = 1; $i <= $years; $i++) 
{
    $profit = $initialAmount * $rate;
    $initialAmount += $profit;
    echo "<tr><td>$i</td><td>" . round($initialAmount, 2) . "</td><td>" . round($profit, 2) . "</td></tr>";
}
echo "</table>";
?>
</body>
</html>