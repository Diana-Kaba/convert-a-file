<?php

$path = "poems";
if (!is_dir($path)) {
    mkdir($path);
}

$str_b = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poem</title>
</head>
<body>';
$str_e = '</body>
</html>';

$f = fopen("poem.txt", "r");
$arr = file("poem.txt");

$arr[0] = "<h1>{$arr[0]}</h1>";
$arr[1] = "<pre>";
$arr[count($arr) - 1] = "</pre>";

$content = implode("\n", $arr);

$h = fopen($path . "/poem.html", "w");

$text = $str_b . "\n" . $content . "\n" . $str_e;

if (fwrite($h, $text)) {
    echo "Запис зроблено успішно";
} else {
    echo "Виникла помилка при запису даних";
}

fclose($h);
