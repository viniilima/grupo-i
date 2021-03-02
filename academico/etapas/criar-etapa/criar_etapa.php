<?php

$ordem = $_POST['ordem'];

$conn = mysqli_connect('localhost', 'root', '', 'academico');

$sql = 'SELECT * FROM etapas ORDER BY id';

if($result = mysqli_query($conn, $sql)) {
    if(mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_row($result)) {
            print_r($row);
            if($row[0] == $ordem) {
                echo false;
                die();
            }
        }
    }
}

$valor = $_POST['valor'];

$sql = 'INSERT INTO etapas(id, valor) VALUES(
    ' . $ordem . ',
    ' . $valor . '
)';

if(mysqli_query($conn, $sql)) echo true;
