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
            <form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
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
            <fieldset id="resultado"><legend>Resultado</legend>
                <?php 
                    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
                        
                        $titulo1 = $_POST['tipo'];
                        if($titulo1 == "1" || $titulo1 == "2") {
                            $isento1 = false;
                        } 
                        if($titulo1 == "3" || $titulo1 == "4") {
                            $isento1 = true;
                        }

                        $titulo2 = $_POST['tipo2'];
                        if($titulo2 == "1" || $titulo2 == "2") {
                            $isento2 = false;
                        } 
                        if($titulo2 == "3" || $titulo2 == "4") {
                            $isento2 = true;
                        }

                        $taxa1 = $_POST['taxa'];
                        $taxa2 = $_POST['taxa2'];

                        $dias1 = $_POST['dias'];
                        if($dias1 == "1" && $isento1 == false) {
                            $dias1 = 22.5;
                            $taxa1 = $taxa1 - ($taxa1 * ($dias1 / 100));
                        } elseif($dias1 == "2" && $isento1 == false) {
                            $dias1 = 20;
                            $taxa1 = $taxa1 - ($taxa1 * ($dias1 / 100));
                        } elseif($dias1 == "3" && $isento1 == false) {
                            $dias1 = 17.5;
                            $taxa1 = $taxa1 - ($taxa1 * ($dias1 / 100));
                        } elseif($dias1 == "4" && $isento1 == false) {
                            $dias1 = 15;
                            $taxa1 = $taxa1 - ($taxa1 * ($dias1 / 100));
                        }

                        $dias2 = $_POST['dias2'];
                        if($dias2 == "1" && $isento2 == false) {
                            $dias2 = 22.5;
                            $taxa2 = $taxa2 - ($taxa2 * ($dias2 / 100));
                        } elseif($dias2 == "2" && $isento2 == false) {
                            $dias2 = 20;
                            $taxa2 = $taxa2 - ($taxa2 * ($dias2 / 100));
                        } elseif($dias2 == "3" && $isento2 == false) {
                            $dias2 = 17.5;
                            $taxa2 = $taxa2 - ($taxa2 * ($dias2 / 100));
                        } elseif($dias2 == "4" && $isento2 == false) {
                            $dias2 = 15;
                            $taxa2 = $taxa2 - ($taxa2 * ($dias2 / 100));
                        }

                        $taxaReal1 = $taxa1;
                        $taxaReal2 = $taxa2;

                        if ($titulo1 == $titulo2 && $dias1 == $dias2) {
                            echo "<textarea rows=\"2\" cols=\"30\" readonly>Os titulos são iguais</textarea>";
                            echo "<label for=\"val1\">Taxa real do primeiro</label>
                                 <input type=\"text\" name=\"val1\" value=".$taxaReal1." readonly>";
                            echo "<label for=\"val2\"></label>Taxa real do segundo</label>
                                 <input type=\"text\" name=\"val2\" value=".$taxaReal2." readonly>";
                        }
                        if ($taxaReal1 > $taxaReal2) {
                            echo "<textarea rows=\"2\" cols=\"30\" readonly>O primeiro titulo rende mais que o segundo!</textarea>";
                            echo "<label for=\"val1\">Taxa real do primeiro</label>
                                 <input type=\"text\" name=\"val1\" value=".$taxaReal1." readonly>";
                            echo "<label for=\"val2\">Taxa real do segundo</label>
                                 <input type=\"text\" name=\"val2\" value=".$taxaReal2." readonly>";
                        }
                        if ($taxaReal2 > $taxaReal1) {
                            echo "<textarea rows=\"2\" cols=\"30\" readonly>O segundo titulo rende mais que o primeiro!</textarea>";
                            echo "<label for=\"val1\">Taxa real do primeiro</label>
                                 <input type=\"text\" name=\"val1\" value=".$taxaReal1." readonly>";
                            echo "<label for=\"val2\">Taxa real do segundo</label>
                                 <input type=\"text\" name=\"val2\" value=".$taxaReal2." readonly>";
                        }
                        if ($taxaReal1 == $taxaReal2) {
                            echo "<textarea rows=\"2\" cols=\"30\" readonly>Os titulos rendem igualmente!</textarea>";
                            echo "<label for=\"val1\">Taxa real do primeiro</label>
                                 <input type=\"text\" name=\"val1\" value=".$taxaReal1." readonly>";
                            echo "<label for=\"val2\">Taxa real do segundo</label>
                                 <input type=\"text\" name=\"val2\" value=".$taxaReal2." readonly>";
                        }

                    } else {
                        echo "<p>Preencha o formulário</p>";
                    }
                
                ?>
                </fieldset>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>