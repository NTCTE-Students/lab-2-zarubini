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

        do {
            print("<li>$number</li>");
            $number++;
        } while ($number <= 10);
    ?>
    </ul>
</body>
</html>