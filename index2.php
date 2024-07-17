<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$images = glob("*.{jpg,jpeg,png,gif}", GLOB_BRACE);
foreach ($images as $image) 
{
    echo "<img src='$image' alt='$image' style='width:200px;height:auto;'><br>";
}
?>
</body>
</html>