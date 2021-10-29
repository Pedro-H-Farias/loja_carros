<?php
//sessão
session_start();

//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-alterar'])):
  $id = mysqli_escape_string($connect, $_POST['id']);
  $Marca = mysqli_escape_string($connect, $_POST['Marca']);
  $Modelo = mysqli_escape_string($connect, $_POST['Modelo']);
  $Descricao = mysqli_escape_string($connect, $_POST['Descricao']);
  $Mod_fab = mysqli_escape_string($connect, $_POST['mod_fab']);
  $Cor = mysqli_escape_string($connect, $_POST['Cor']);
  $Placa = mysqli_escape_string($connect, $_POST['Placa']);
  $Valor = mysqli_escape_string($connect, $_POST['Valor']);

  $sql = "UPDATE estoque SET Marca = '$Marca', Modelo = '$Modelo', Descricao = '$Descricao', mod_fab = '$mod_fab', Cor = '$Cor', Placa = '$Placa', Valor = '$Valor' WHERE id = '$id'";

  if (mysqli_query($connect, $sql)) :
    header("Location: ../consultar.php?sucesso");
  else :
    header("Location: ../consultar.php?erro");
  endif;
endif;