<?php
if(isset($_POST["btncalcular"])){
require_once "Taquilla.php";

$taquilla = new Taquilla();

$edad=$_POST["txtedad"];

$taquilla->setValoredad($edad);

$taquilla->taquillaValor();  
}






?>