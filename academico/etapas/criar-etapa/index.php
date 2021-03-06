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
        <form method="post">
            <div class="input-container">
                <label for="ordem">Ordem</label>
                <input type="number" name="ordem" class="etapas-data" required>
            </div>
            <div class="input-container">
                <label for="valor">Valor</label>
                <input type="number" name="valor" class="etapas-data" maxlength="5" required>
            </div>
        </form>
        <div class="btn-container">
            <button id="submit">Criar</button>
        </div>
    </div>
    <script src="../../assets/etapas/js/cria_etapa.js"></script>
</body>
</html>
