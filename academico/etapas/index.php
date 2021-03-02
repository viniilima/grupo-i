<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etapas - Projeto Acadêmico</title>
</head>
<body>
    <main class="container">
        <div class="list-container">
            <h1>Lista de Etapas</h1>
            <div class="btns">
                <a class="btn" href="criar-etapa/">+ Nova</a>
            </div>
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'academico');
                $sql = 'SELECT * FROM etapas ORDER BY id';
                if($result = mysqli_query($conn, $sql)) {
                    if(mysqli_num_rows($result) == 0) {
                        echo '<span class="error">Não há etapas cadastradas :(</span>';
                        die();
                    }
                    echo '<table>';
                    echo '<thead>
                        <tr>
                            <th>Ordem</th>
                            <th>Valor</th>
                            <th colspan="2">Ações</th>
                        </tr>
                        </thead>';
                    while($row = mysqli_fetch_row($result)) {
                        echo '<tbody>
                            <tr>
                                <td>'. $row[0] . '</td>
                                <td>' . $row[1] . '</td>
                                <td title="Editar"><img id="edit-btn" class="table-icon" src="../assets/img/edit.svg"></td>
                                <td title="Excluir"><img id="delete-btn" class="table-icon" src="../assets/img/excluir.svg"></td>
                            </tr>
                            </tbody>';
                    }
                    echo '</table>';
                }
            ?>
        </div>
    </main>
</body>
</html>
