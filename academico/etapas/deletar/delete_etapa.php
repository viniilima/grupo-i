<?php

$id = $_POST['id'];

$conn = mysqli_connect('localhost', 'root', '', 'academico');
$sql = "DELETE FROM etapas WHERE id = $id";

if(mysqli_query($conn, $sql)) http_response_code(200);
