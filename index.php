<?php

echo file_get_contents('Templates/head.tpl');
$szam =35;
$szam2 =47;
$összeg = ($szam *2) +($szam2*2);

$page = file_get_contents('Templates/index.tpl');
$page = str_replace('{{ összeg }}', $összeg, $page);
echo $page;

echo file_get_contents('Templates/foot.tpl');
 ?>
