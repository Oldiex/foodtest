<?php
function debug(array $data):void
{
    echo '<pre>'. print_r($data,1). '</pre>';
}
function get_products(): array
{
    global $pdo;
    $res= $pdo->query("Select * from product_list ");
    return $res->fetchAll();
}
?>