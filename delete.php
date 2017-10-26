<?php
include_once 'config.php';
include_once 'connect_db.php';
include_once 'helpers';

$id = $_REQUEST['id'];
$sql = "DELETE FROM distribucion WHERE id = :id LIMIT 1";
$result = $pdo->prepare($sql);
$result->execute([
    'id' => $id
]);
// Volvemos al inicio (index.php)
header('Location: index.php');