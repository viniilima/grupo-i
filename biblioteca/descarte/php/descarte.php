<?php
$data = json_decode($_POST['data']);
$conn = mysqli_connect('localhost', 'root', '', 'biblioteca');

// Deleta
$sql = 'DELETE FROM acervo WHERE id = ' . $data->id;

if(mysqli_query($conn, $sql)) http_response_code(200);

// Adiciona dados na tabela
$sql = "INSERT INTO `descartes` (id_acervo, data_descarte, motivos, operador) VALUES (
    $data->id,
    '" . date('Y-m-d') . "',
    '$data->motivos',
    '$data->operador'
)";

echo $sql;

if(mysqli_query($conn, $sql)) http_response_code(200);
