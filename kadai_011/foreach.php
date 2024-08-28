<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p>
            <?php
            $items = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
            foreach ($items as $item => $value) {
                echo "{$item}:{$value}<br>";
            }
            ?>
        </p>
    </body>
</html>