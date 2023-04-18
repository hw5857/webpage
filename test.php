<!DOCTYPE html>
<html>
<body>

<?php
$n = 30;
$sum = 0;
$prod = 1;
for($i=1; $i <= $n; $i++){
    echo $i;
    echo "<br>";
    $sum += $i;
    $prod = $prod * $i;
}

echo $sum;
echo "<br>";
echo $prod;
echo "<br>";

?>

</body>
</html>