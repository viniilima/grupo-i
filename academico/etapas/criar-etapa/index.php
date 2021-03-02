<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Etapa - Projeto Acadêmico</title>
</head>
<body>
    <div class="form-container">
        <h1>Criar nova Etapa</h1>
        <form action="criar_etapa.php" method="post">
            <div class="input-container">
                <label for="ordem">Ordem</label>
                <input type="number" name="ordem">
            </div>
            <div class="input-container">
                <label for="valor">Valor</label>
                <input type="number" name="valor" maxlength="5">
            </div>
            <div class="input-container">
                <input type="submit" value="Criar">
            </div>
        </form>
    </div>
</body>
</html>
