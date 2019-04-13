<?php
if(isset($_COOKIE["sobreSOperacional"])){

        //Recuperando no formato 'json':
        //var_dump($_COOKIE["sobreSOperacional"]);

        
        //'json_decode(): Convertendo agora de json para array. 
        //'true':É gerado como um array, e não como um objeto
        //var_dump(json_decode($_COOKIE["sobreSOperacional"], true));

        //Gerando como um objeto:
        //var_dump(json_decode($_COOKIE["sobreSOperacional"]));

        //Criando um objeto:
        $obj = json_decode($_COOKIE["sobreSOperacional"]);

        echo $obj->so;
        echo $obj->versão;

}




?>