<?php

$id_old = $_GET['id-old'];
$valor_old = $_GET['valor-old'];

$id = $_POST['id'] == '' ? $id_old : $_POST['id'];
$valor = $_POST['valor'] == '' ? $valor_old : $_POST['valor'];

$conn = mysqli_connect('localhost', 'root', '', 'academico');
$sql = "UPDATE etapas SET id = $id, valor = $valor WHERE id = $id_old";
if(mysqli_query($conn, $sql)) header('Location: ../');
