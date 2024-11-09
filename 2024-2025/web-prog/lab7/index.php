<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Цикл While</h2>

    <?php
    $i = 1;
    while ($i <= 10) {
        echo "{$i}<br>";
        $i++;
    }

    echo "<h2>Вложенный цикл</h2>";

    echo '<table border="1px" wigth="100%">';
    $tr = 1;
    while ($tr <= 10) {
        echo "<tr>";
        $td = 1;
        while ($td <= 10) {
            echo "<td>" . $td * $tr . "</td>";
            $td++;
        }
        echo "</tr>";
        $tr++;
    }
    echo '</table>';

    echo "<h2>Цикл do-while</h2>";

    $i = 1;
    do {
        echo "{$i}<br>";
        $i++;
    } while ($i <= 10);

    ?>

    <br>

    <h2>Задание с Select</h2>

    <form>
        <select name="" id="">
            <?php
            $i = 1900;
            while ($i <= 2021) {
                echo "<option>" . $i . "</option>";
                $i++;
            }
            ?>
        </select>
    </form>

    <h2>Задание с таблицей умножения</h2>

    <table border="1" width="100%">
        <?php
        $tr = 1;
        while ($tr <= 10) {
            $td = 1;
            echo "<tr>";
            while ($td <= 10) {
                echo "<td>" . $td . " * " . $tr . " = " . $td * $tr . "</td>";
                $td++;
            }
            echo "</tr>";
            $tr++;
        }

        ?>
    </table>

    <h2>Цикл for</h2>

    <table border="1" width="100%">
        <?php
        for ($tr = 1; $tr <= 10; $tr++) {
            echo "<tr>";
            for ($td = 1; $td <= 10; $td++) {
                echo "<td>" . $td . " * " . $tr . " = " . $td * $tr . "</td>";
            }
            echo "</tr>";
        }

        ?>
    </table>

    <h2>Оператор Switch и Break</h2>
    <?php
    $i = 4;
    switch ($i) {
        case 1:
            echo 1;
            break;
        case 2:
            echo 2;
            break;
        case 3:
            echo 3;
            break;
        case 4:
            echo 4;
            break;
        default:
            echo 5;
    }
    ?>

    <h2>Оператор Continue</h2>
    <?php
    for ($i = 1; $i < 20; $i++) {
        if (!($i % 2)) {
            continue;
        }
        echo "{$i}<br>";
    }
    ?>

    <h2>Оператор Match</h2>
    <?php
    $i = 2;
    $res = match ($i) {
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four",
        default => "Five",
    };
    echo $res;
    ?>

    <h2>Массивы</h2>
    <?php
    $array = [
        1 => "One",
        2 => "Two",
    ];
    var_dump($array);

    $array[] = "Three";
    echo "<br>";
    var_dump($array);
    $goods = [
        [
            "title" => "Oneplus",
            "price" => 68000,
            "qty" => 12,
        ],
        [
            "title" => "Apple",
            "price" => 168000,
            "qty" => 3,
        ],
        [
            "title" => "Huawei",
            "price" => 40000,
            "qty" => 22,
        ],
    ];

    echo "<br>";

    print_r($goods);

    ?>

    <h2>Цикл Foreach</h2>
    <?php
    $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    foreach ($nums as $num) {
        echo $num . "<br>";
    }
    ?>

    <h2>Самостоятельное Задание</h2>

    <?php

    for ($i = 1; $i < 10; $i += 2) {
        echo $nums[$i] . "<br>";
    }

    for ($i = 1; $i < 10; $i += 1) {
        if (($i % 2)) {
            echo $nums[$i] . "<br>";
        }
    }

    foreach ($goods as &$good) {
        $good["price"] += ($good['price'] < 70000) ? 15000 : 0;
    }
    echo "<pre>" . print_r($goods, 1) . "</pre>";

    ?>

</body>

</html>