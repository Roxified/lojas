<?php


try { $db = new PDO('mysql:host=localhost;dbname=lojas;charset=utf8','root','');}
catch(Expression $e){ echo $e->getMessage(); }

$referer = $_SERVER['HTTP_REFERER'] ?? null;
?>