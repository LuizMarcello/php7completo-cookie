<?php
//Array super global associativo, que já contém os cookies
//que estão na máquina da pessoa.
if(isset($_COOKIE["NOME_DO_COOKIE"])){
    //Recuperando no formato 'json':
    //var_dump($_COOKIE["NOME_DO_COOKIE"]);

    //'json_decode(): Convertendo agora de json para array. 
    //'true':É gerado como um array, e não como um objeto
    //var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));

    //Gerando como um objeto:
    //var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));

    //Criando um objeto:
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
    //Somente o atributo/chave 'cidade':
    echo $obj->cidade;
}



?>