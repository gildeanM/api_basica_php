<?php

$nome = $_POST["name"];
$email = $_POST["email"];
$idade = $_POST["idade"];

//importa o arquivo de conexão
include_once("conect.php");

//importa o arquivo de classe Crud
include_once("Crud.php");

// echo $conect;
$obj = new Crud($conect);

$obj->setDados($nome, $idade ,$email);

$obj->insertDados();