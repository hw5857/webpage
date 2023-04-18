<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence</title>
</head>
<body>
    <form method="post">
        <label>100이하의 정수를 입력하십시오 : </label>
        <input type="number" name="n" min="1" max="100" required>
        <input type="submit" name="submit" value="Generate">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $n = $_POST['n'];

        $prev = 0;
        $current = 1;
        echo $prev . " ";
        echo $current . " ";

        for ($i = 3; $i <= $n; $i++) {
            $next = $prev + $current;
            echo $next . " ";
            $ratio = $current != 0 ? $next / $current : 0;
            echo "(" . $next . "/" . $current . " = " . round($ratio, 2) . ")" . " ";
            $prev = $current;
            $current = $next;
        }
    }
    ?>
</body>
</html>