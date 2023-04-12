<?php
$list = file_get_contents(__DIR__.'/list.json');

$list = json_decode($list, true);

var_dump($list);
?>