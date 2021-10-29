<?php
//sessão
session_start();

//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-adicionar'])):
  $Marca = mysqli_escape_string($connect, $_POST['Marca']);
  $Modelo = mysqli_escape_string($connect, $_POST['Modelo']);
  $Descricao = mysqli_escape_string($connect, $_POST['Descricao']);
  $Mod_fab = mysqli_escape_string($connect, $_POST['mod_fab']);
  $Cor = mysqli_escape_string($connect, $_POST['Cor']);
  $Placa = mysqli_escape_string($connect, $_POST['Placa']);
  $Valor = mysqli_escape_string($connect, $_POST['Valor']);

  $sql = "INSERT INTO estoque (Marca, Modelo, Descricao, mod_fab, Cor, Placa, Valor) VALUES('$Marca', '$Modelo', '$Descricao', '$mod_fab', '$Cor', '$Placa', '$Valor')";

  if (mysqli_query($connect, $sql)) :
    header("Location: ../consultar.php.php?sucesso");
  else :
    header("Location: ../consultar.php.php?erro");
  endif;
endif;