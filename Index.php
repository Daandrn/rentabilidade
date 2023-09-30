<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de rentabilidade</title>
</head>
<body>
    <header>
        <h1>Calculo de rentabilidade</h1>
    </header>
    <main id="principal">
        <div id="comparacao">
            <form name="form" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <Fieldset><legend>Primeiro titulo</legend>
                    <label for="tipo">Tipo de titulo</label>
                    <select name="tipo" id="tipo" required>
                        <option value=""></option>
                        <option value="1">CDB</option>
                        <option value="2">TESOURO SELIC</option>
                        <option value="3">LCI/LCA</option>
                        <option value="4">CRI/CRA</option>
                    </select>
                    <label for="taxa">Taxa anual contratada</label>
                    <input type="number" name="taxa" id="taxa" step="0.01" min="0" max="20" pattern="[0-9]*" maxlength="3" size="3" placeholder="00.00" required>
                    <label for="dias">Quantidade de dias</label>
                    <select name="dias" id="dias" required>
                        <option value=""></option>
                        <option value="1">Até 180 dias</option>
                        <option value="2">De 181 a 360 dias</option>
                        <option value="3">De 361 a 720 dias</option>
                        <option value="4">Acima de 720 dias</option>
                    </select>
                </Fieldset>
                <Fieldset><legend>Segundo titulo</legend>
                    <label for="tipo2">Tipo de titulo</label>
                    <select name="tipo2" id="tipo2" required>
                        <option value=""></option>
                        <option value="1">CDB</option>
                        <option value="2">TESOURO SELIC</option>
                        <option value="3">LCI/LCA</option>
                        <option value="4">CRI/CRA</option>
                    </select>
                    </select>
                    <label for="taxa2">Taxa anual contratada</label>
                    <input type="number" name="taxa2" id="taxa2" step="0.01" min="0" max="20" pattern="[0-9]*" maxlength="3" size="3" placeholder="00.00" required>
                    <label for="dias2">Quantidade de dias</label>
                    <select name="dias2" id="dias2" required>
                        <option value=""></option>
                        <option value="1">Até 180 dias</option>
                        <option value="2">De 181 a 360 dias</option>
                        <option value="3">De 361 a 720 dias</option>
                        <option value="4">Acima de 720 dias</option>
                    </select>
                </Fieldset>
                <input type="submit" value="Comparar" for="form" id="comparar">
            </form>
        </div>
        <div id="tabela">
            <fieldset><legend>Tabela de IR</legend>
                <ul>
                    <li>Até 180 dias: 22,5%</li>
                    <li>De 181 a 360 dias: 20%</li>
                    <li>De 361 a 720 dias: 17,5%</li>
                    <li>Acima de 720 dias: 15%</li>
                </ul>
            </fieldset>
            <?php require_once('run.php'); ?>
            <fieldset id="resultado"><legend>Resultado</legend>
                <textarea rows="2" cols="30" readonly><?php echo $resultado?></textarea>
                <label for="val1">Taxa real do primeiro</label>
                <input type="text" name="val1" value="<?php if (isset($taxaReal1)) {echo $taxaReal1;} ?>" readonly>
                <label for="val2"></label>Taxa real do segundo</label>
                <input type="text" name="val2" value="<?php if (isset($taxaReal2)) {echo $taxaReal2;}; ?>" readonly>
            </fieldset>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>