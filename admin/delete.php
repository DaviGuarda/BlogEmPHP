<?php
include_once('../config/connection.php');

$stmt = $conectar->prepare("DELETE FROM posts WHERE id = :id");

$id = $_GET['id'];

$stmt->bindParam(":id", $id);

$stmt->execute();

echo "Registro Apagado";
header("Location: view2.php");

?>