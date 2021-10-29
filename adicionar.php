<?php
//header
include_once 'includes/header.php';
?>
<div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />

        <div class="row center">
          <div class="col s12 m12 l12 xl12">
            <h3 class="light">Adicionar carro</h3>
              <form action="php_action/create.php" method="POST">
                <div class="input-field col s12 m4">
                  <input type="text" name="Marca" id="Marca">
                  <label for="Marca">Marca</label>
                </div>

                <div class="input-field col s12 m4">
                  <input type="text" name="Modelo" id="Modelo">
                  <label for="Modelo">Modelo</label>
                </div>

                <div class="input-field col s12 m4">
                  <input type="text" name="Descricao" id="Descricao">
                  <label for="Descricao">Descrição</label>
                </div>

                <div class="input-field col s12 m4" >
                  <input type="text" name="mod_fab" id="mod_fab">
                  <label for="mod_fab">Modelo/Fabricação</label>
                </div>

                <div class="input-field col s12 m4">
                  <input type="text" name="Cor" id="Cor">
                  <label for="Cor">Cor</label>
                </div>

                <div class="input-field col s12 m4">
                  <input type="text" name="Placa" id="Placa">
                  <label for="Placa">Placa</label>
                </div>

                <div class="input-field col s12">
                  <input type="int" name="Valor" id="Valor">
                  <label for="Valor">Valor(R$)</label>
                </div>
                <button type="submit" name="btn-adicionar" class="btn">Adicionar</button>
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