<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Список чисел</title>
</head>
<body>
    <h1>Список чисел от 1 до 10</h1>
    <ul>
    <?php
        $number = 1;

        while ($number <= 10) {
            print("<li>$number</li>");
            $number++;
        }
        ?>
    </ul>
</body>
</html>