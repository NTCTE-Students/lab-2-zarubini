<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Таблица умножения</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Таблица умножения</h1>
    <table>
    <?php

print('<tr>');
print('<th>*</th>');
for ($i = 1; $i <= 10; $i++) {
    print("<th>$i</th>");
}
print('</tr>');

for ($i = 1; $i <= 10; $i++) {
    print('<tr>');
    print("<th>$i</th>");
    for ($j = 1; $j <= 10; $j++) {
        print('<td>' . ($i * $j) . '</td>');
    }
    print('</tr>');
} ?>
    </table>
</body>
</html>
