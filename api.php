<?php
header('Content-Type: application/json');

$apiData = file_get_contents("task.json");
$apiDataList = json_decode($apiData, true);

if (isset($_POST['newTask'])) {
  $apiDataList[] = $_POST['newTask'];
  file_put_contents("task.json", json_encode($apiDataList));
} else if (isset($_POST['deleteAll'])) {
  $apiDataList = [];
  file_put_contents("task.json", json_encode($apiDataList));
} else if (isset($_POST['deleteIndex'])) {
  $index = $_POST['deleteIndex'];
  unset($apiDataList[$index]);
  $apiDataList = array_values($apiDataList);
  file_put_contents("task.json", json_encode($apiDataList));
}

// $apiData = json_encode($apiDataList);

echo $apiData;
