<?php

$data = array("empresa"=>"Hcode treinamentos", "cidade"=>"londrina");

//Função nativa pré-definida para setar/criar um cookie temporário.
//Parâmetros: Nome do cookie e valor a ser inserido
//            Valor salvo dentro do cookie, no formato json.
//            Tempo de vida do cookie(unix time-stamp)
//            Função pré-definida nativa time(), retorna o time stamp do momento.
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";



?>