<?php

$data = array("so"=>"windows","versao"=>"windows7");

setcookie("sobreSOperacional", json_encode($data), time() + 3600);

echo "OK";




?>