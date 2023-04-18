<!DOCTYPE html>
<html>
<body>

<?php

$n = 20;

$numbers = array();
for ($i = 0; $i < $n; $i++) {
    $numbers[] = rand(10, 100);
}

echo "생성된 랜덤넘버: ";
foreach ($numbers as $number) {
    echo $number . " ";
}

sort($numbers);

echo "<br>오름차순으로 정렬: ";
foreach ($numbers as $number) {
    echo $number . " ";
}

?>

</body>
</html>