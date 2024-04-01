<?php

//importa o arquivo de conexão
include_once("conect.php");

//importa o arquivo de classe Crud
include_once("Crud.php");

// echo $conect;
$obj = new Crud($conect);

// $obj->readInfo();
$dados = $obj->getAll();

echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";

echo "<main>
        
<header>Delete o registro</header>";

// var_dump($dados);

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Idade</th><th>E-mail</th><th>Data</th><th>Deletar</th></tr>";

foreach($dados as $info){

    echo "<tr><td>".$info['nome']."</td>
    <td>".$info['idade']."</td>
    <td>".$info['email']."</td>
    <td>".$info['data_now']."</td>
    <td><a href=formDelete.php?id=".$info['id'].">Deletar</a></td>
    </tr>";
    

}  
echo "</table>";
echo "</main>"



?>