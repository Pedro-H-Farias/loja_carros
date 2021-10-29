<?php

//conexão
include_once 'php_action/db_connect.php';

//header
include_once 'includes/header.php';
?>
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br /><br />
    <div class="row center">
      <div class="col s12 m12 l12 xl12">
        <h3 class="light">Relatório</h3>
        <form action="php_action/report.php" target="_blank" method="POST">
        <label for="Marca">Selecione a Marca:</label>
        <select name="marcaselecionada" id="">
          <option value="">TODAS AS MARCAS</option>
          <?php 
          $sql = "SELECT DISTINCT marca FROM estoque";
          $resultado = mysqli_query($connect, $sql);
          while($dados = mysqli_fetch_array($resultado)) :
          ?>
          <option> <?php echo $dados['Marca']; ?></option>
          <?php endwhile; ?>
        </select>
          <input type="submit" name="btn-relatorio" class="btn orange" value="selecionar"/>
        </form>
      </div>
    </div>

    <br /><br />
  </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>