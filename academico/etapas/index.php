<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etapas - Projeto Acadêmico</title>
</head>
<body>
    <div class="container">
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
                        echo '<div class="error-msg">Não há etapas cadastradas :(</div>';
                        die();
                    }
                    echo '<table>';
                    echo '<thead>
                        <tr>
                            <th>Ordem</th>
                            <th>Valor</th>
                            <th colspan="2">Ações</th>
                        </tr>
                        </thead>
                        <tbody>';
                    while($row = mysqli_fetch_row($result)) {
                        echo '<tr>
                                <td>'. $row[0] . '</td>
                                <td>' . $row[1] . '</td>
                                <td title="Editar">
                                    <div class="edit-btn" data-id="'.$row[0].'" data-valor="'.$row[1].'">
                                        <img class="table-icon" src="../assets/etapas/img/edit.svg">
                                    </div>
                                </td>
                                <td title="Excluir">
                                    <div class="delete-btn" data-id="'.$row[0].'" data-valor="'.$row[1].'">
                                        <img class="table-icon" src="../assets/etapas/img/excluir.svg">
                                    </div>
                                </td>
                            </tr>';
                    }
                    echo '</tbody></table>';
                }
            ?>
        </div>
    </div>
    <script src="../assets/etapas/js/main.js"></script>
</body>
</html>
