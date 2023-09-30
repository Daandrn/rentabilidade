<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $resultado1 = run();
        $resultado = $resultado1["resultado"];
        $taxaReal1 = $resultado1["taxareal1"];
        $taxaReal2 = $resultado1["taxareal2"];
    } else {
        $resultado = "Preencha o formulário";
    }

    function run()
    {
        $titulo1 = $_POST['tipo'];
        if ($titulo1 == "1" || $titulo1 == "2") {
            $isento1 = false;
        }
        if ($titulo1 == "3" || $titulo1 == "4") {
            $isento1 = true;
        }

        $titulo2 = $_POST['tipo2'];
        if ($titulo2 == "1" || $titulo2 == "2") {
            $isento2 = false;
        }
        if ($titulo2 == "3" || $titulo2 == "4") {
            $isento2 = true;
        }

        $taxa1 = $_POST['taxa'];
        $taxa2 = $_POST['taxa2'];

        $dias1 = $_POST['dias'];
        if ($dias1 == "1" && $isento1 == false) {
            $dias1 = 22.5;
            $taxa1 = $taxa1 - ($taxa1 * ($dias1 / 100));
        } elseif ($dias1 == "2" && $isento1 == false) {
            $dias1 = 20;
            $taxa1 = $taxa1 - ($taxa1 * ($dias1 / 100));
        } elseif ($dias1 == "3" && $isento1 == false) {
            $dias1 = 17.5;
            $taxa1 = $taxa1 - ($taxa1 * ($dias1 / 100));
        } elseif ($dias1 == "4" && $isento1 == false) {
            $dias1 = 15;
            $taxa1 = $taxa1 - ($taxa1 * ($dias1 / 100));
        }

        $dias2 = $_POST['dias2'];
        if ($dias2 == "1" && $isento2 == false) {
            $dias2 = 22.5;
            $taxa2 = $taxa2 - ($taxa2 * ($dias2 / 100));
        } elseif ($dias2 == "2" && $isento2 == false) {
            $dias2 = 20;
            $taxa2 = $taxa2 - ($taxa2 * ($dias2 / 100));
        } elseif ($dias2 == "3" && $isento2 == false) {
            $dias2 = 17.5;
            $taxa2 = $taxa2 - ($taxa2 * ($dias2 / 100));
        } elseif ($dias2 == "4" && $isento2 == false) {
            $dias2 = 15;
            $taxa2 = $taxa2 - ($taxa2 * ($dias2 / 100));
        }

        $taxaReal1 = $taxa1;
        $taxaReal2 = $taxa2;

        if ($titulo1 == $titulo2 && $dias1 == $dias2) {
            return array(
                "resultado" => "Os titulos são iguais",
                "taxareal1" => $taxaReal1,
                "taxareal2" => $taxaReal2
            );
        }
        if ($taxaReal1 > $taxaReal2) {
            return array(
                "resultado" => "O primeiro titulo rende mais que o segundo!",
                "taxareal1" => $taxaReal1,
                "taxareal2" => $taxaReal2
            );
        }
        if ($taxaReal2 > $taxaReal1) {
            return array(
                "resultado" => "O segundo titulo rende mais que o primeiro!",
                "taxareal1" => $taxaReal1,
                "taxareal2" => $taxaReal2
            );
        }
        if ($taxaReal1 == $taxaReal2) {
            return array(
                "resultado" => "Os titulos rendem igualmente!",
                "taxareal1" => $taxaReal1,
                "taxareal2" => $taxaReal2
            );
        }
    }
        
