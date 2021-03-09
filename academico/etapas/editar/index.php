<?php
    $id_old = $_GET['id'];
    $valor_old = $_GET['valor'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Etapa - Projeto Acadêmico</title>
</head>
<body>
    <div class="container">
        <h1>Editar etapa <?php echo $id_old; ?></h1>
        <div class="form-container">
            <form action="update_etapa.php?id-old=<?php echo $id_old ?>&valor-old=<?php echo $id_old ?>" method="post">
                <div class="input-container">
                    <label for="id">Nova ordem</label>
                    <input type="number" name="id" placeholder="(<?php echo $id_old ?>)">
                </div>
                <div class="input-container">
                    <label for="valor">Novo valor</label>
                    <input type="number" name="valor" placeholder="(<?php echo $valor_old ?>)">
                </div>
                <div class="btn-container">
                    <input type="submit" name="submit" value="Alterar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
