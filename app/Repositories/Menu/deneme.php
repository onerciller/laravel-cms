<?php

$il  = "Antalya";
$ilçe = "Alanya";
$olay = "UYARI";

$idari_bölümler = array("il", "ilçe");

#farkı da bu
$sonuç = compact("olay", 'idari_bölümler');
$sonuç = compact("olay", $idari_bölümler);
print_r($sonuç);




?>