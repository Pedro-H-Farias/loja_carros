<?php
//conexão
include_once 'php_action/db_connect.php';

//header
include_once 'includes/header.php';


//select
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "SELECT * FROM estoque WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;

?>


<div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />
        <div class="row center">
          <div class="col s12 m12 l12 xl12">
            <h3 class="light">Alterar carro</h3>
              <form action="php_action/update.php" method="POST">
              <input type="hidden" name="id" value = "<?php echo $dados['id'];?>">

                <div class="input-field col s12 m4">
                  <input type="text" name="Marca" id="Marca" value="<?php echo $dados['Marca']; ?>">
                  <label for="Marca">Marca</label>
                </div>

                <div class="input-field col s12 m4">
                  <input type="text" name="Modelo" id="Modelo" value="<?php echo $dados['Modelo']; ?>">
                  <label for="Modelo">Modelo</label>
                </div>

                <div class="input-field col s12 m4">
                  <input type="text" name="Descricao" id="Descricao" value="<?php echo $dados['Descricao']; ?>">
                  <label for="Descricao">Descrição</label>
                </div>

                <div class="input-field col s12 m4" >
                  <input type="text" name="mod_fab" id="mod_fab" value="<?php echo $dados['mod_fab']; ?>">
                  <label for="mod_fab">Modelo/Fabricação</label>
                </div>

                <div class="input-field col s12 m4">
                  <input type="text" name="Cor" id="Cor" value="<?php echo $dados['Cor']; ?>">
                  <label for="Cor">Cor</label>
                </div>

                <div class="input-field col s12 m4">
                  <input type="text" name="Placa" id="Placa" value="<?php echo $dados['Placa']; ?>">
                  <label for="Placa">Placa</label>
                </div>

                <div class="input-field col s12">
                  <input type="int" name="Valor" id="Valor" value="<?php echo $dados['Valor']; ?>">
                  <label for="Valor">Valor(R$)</label>
                </div>
                <button type="submit" name="btn-alterar" class="btn">Alterar</button>
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