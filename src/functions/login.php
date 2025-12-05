<?php 
$logado = false;

while ($logado == false) {
    $user = readline("Usuario: ");
    $pass = readline("Senha: ");
        
        if($user != "123" || $pass != 12345) { 
            echo "Senha invalida" . PHP_EOL;
            continue;
        } else {
            $logado = true;
        }
            
}
?>