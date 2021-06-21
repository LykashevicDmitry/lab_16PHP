<?php
require 'configDB';

$id = $_GET['id'];

$sql = "DELETE FROM tasks WHERE id = ? ";
$query = $pdo->prepare($sql);
$query->execute(['id'=>$id]);

header('Location: /');

 ?>
