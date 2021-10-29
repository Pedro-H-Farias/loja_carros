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
        <h3 class="light">Estoque de Carros</h3>
        <table class="striped">
          <thread>
            <try>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Descrição</th>
              <th>Mod/Fab</th>
              <th>Cor</th>
              <th>Placa</th>
              <th>Valor</th>
            </try>
          </thread>
          <tbody>
          <?php
          $sql = "SELECT * FROM estoque";
          $resultado = mysqli_query($connect, $sql);
          while($dados = mysqli_fetch_array($resultado)):
          ?>
        <tr>
          <td><?php echo $dados['Marca'];?></td>
          <td><?php echo $dados['Modelo'];?></td>
          <td><?php echo $dados['Descricao'];?></td>
          <td><?php echo $dados['mod_fab'];?></td>
          <td><?php echo $dados['Cor'];?></td>
          <td><?php echo $dados['Placa'];?></td>
          <td><?php echo $dados['Valor'];?></td>
          <td><a href="editar.php?<id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>



          <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
          <!-- Modal Structure -->
           <div id="modal<?php echo $dados['id']; ?>" class="modal modal-fixed-footer">
            <div class="modal-content">
              <h4>Tem certeza que deseja excluir o veículo?</h4>
              <p><?php echo $dados['Marca'];?> - <?php echo $dados['Modelo'];?> - <?php echo $dados['Descricao'];?> - <?php echo $dados['mod_fab'];?> - <?php echo $dados['Cor'];?> - <?php echo $dados['Cor'];?> - <?php echo $dados['Placa'];?> - <?php echo $dados['Valor'];?></p>
            </div>
            <div class="modal-footer">
              <form action="php_action/delete.php" method="POST">
            <input type="hidden" name=id value="<?php echo $dados['id']; ?>">
            <a href="#!" class="modal-close waves-effect waves-green ">Não Excluir</a>
            <button type="submit" name="btn-deletar" class="btn red">Sim, excluir</button>
            </form>
            </div>
          </div>




        </tr>
        <?php endwhile; ?>
      </tbody>
        </table>
      </div>
    </div>

    <br /><br />
  </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>