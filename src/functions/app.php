<?php

$opcao = 0;

while ($opcao != 5) {

    echo "1 - Listar Produtos" . PHP_EOL;
    echo "2 - Buscar Produto por nome" . PHP_EOL;
    echo "3 - Adicionar Produto" . PHP_EOL;
    echo "4 - Remover Produto" . PHP_EOL;
    echo "5 - Sair" . PHP_EOL;

    $opcao = readline("Digite uma opção: ");

        switch ($opcao) {
            case 1:
                foreach ($produtos as $produto) {
                    $precoBase = $produto["preco"];
                        $precoFinal = calcularPrecoFinal($precoBase);
                            echo "Nome: " . $produto["nome"] . PHP_EOL;
                            echo "Preço Base: " . $produto["preco"] . PHP_EOL;
                            echo "Preço Final: " . $precoFinal . PHP_EOL;
                            echo "-----------------------------" . PHP_EOL; // separador
                }
            break;
            case 2:
                $busca = readline("Digite o noome do produto: ");
                $encontrado = false;
                foreach($produtos as $produto) {
                    if (strtolower($produto["nome"]) === strtolower($busca)) {
                        $encontrado = true;
                        $precoFinal = calcularPrecoFinal($produto["preco"]);
                        echo "Nome: " . $produto["nome"] . PHP_EOL;
                        echo "Preço Base: " . $produto["preco"] . PHP_EOL;
                        echo "Preço Final: " . $precoFinal . PHP_EOL;
                    }
                }
                    if (!$encontrado) {
                        echo "Produto não encontrado!" . PHP_EOL;
                    }
            break;
            case 3:
                $nomeNovo = readline("Digite o nome do novo produto: ");
                $precoNovo = readline("Digite o preço do novo produto: ");
                $novoProduto = [
                    "nome" => $nomeNovo,
                    "preco" => $precoNovo,
                ];
                $produtos[] = $novoProduto;
                echo "Produto Adicionado" . PHP_EOL;
            break;

            case 4:
                $produtoRemover = readline("Qual produto deseja remover: ");
                $encontrado = false;
                foreach($produtos as $indice => $produto) {
                    if (strtolower($produto["nome"]) === strtolower($produtoRemover)) {
                        $encontrado = true;
                        unset($produtos[$indice]);
                        echo "Produto Removido" . PHP_EOL;
                    }  
                } if (!$encontrado) { echo "Produto não encontrado!" . PHP_EOL; }
            break;
            default:

        }
}

?>