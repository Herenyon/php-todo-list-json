<?php
$param = isset($_GET['index']) ? $_GET['index'] : NULL;
$list = file_get_contents(__DIR__.'/list.json');

$list = json_decode($list, true);

if($param) {
    $list = $list[$param];
}
$list = json_encode($list);

header('Content-Type: application/json');
echo $list;
?> 