<?php

$list = file_get_contents(__DIR__.'/list.json');
$newTask = isset($_POST['newtask']) ? $_POST['newtask'] : NULL;


if($newTask !== NULL){
    $list = json_decode($list, true);
    $list[] = [
        "text" => $newTask,
        "done" => false
    ];
    $list = json_encode($list);
 file_put_contents(__DIR__.'/list.json', $list);
}


if($param !== NULL) {
    $list = json_decode($list, true);
    $list = $list[$param];
    $list = json_encode($list);
}


header('Content-Type: application/json');
echo $list;
?> 