<?php
require './Database.php';

$db = new Database($config);
$groceries = $db->query("select * from groceries")->fetchAll();

function sum($carry, $item)
    {
        $carry += $item['price'] * $item['number'] ;
        return $carry;
    }
    
$totalprice = array_reduce($groceries, "sum");

require "./views/index.view.php";