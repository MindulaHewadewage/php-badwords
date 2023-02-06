<?php 
$word = $_GET['word'];
$text_area = $_GET['text_area'];
$censored_word = str_replace($word,'***',$text_area);
$text_length = strlen($text_area);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Paragrafo originale</h3>
    <p><?=$text_area ?></p>
    <p><i>il paragrafo era lungo <b><?=$text_length ?></b> caratteri</i></p>
    <hr>
    <h3>Paragrafo Censurato</h3>
    <p><?=$censored_word?></p>
    <p><i>il paragrafo era lungo <b><?=$text_length ?></b> caratteri</i></p>
</body>
</html>