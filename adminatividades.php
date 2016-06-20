<?php $namepage = "Painel"; ?>
<?php include('header.php'); ?>
<?php include('headerNav.php'); ?>

<div class="section grey lighten-4">
  <div class="row">
    <div class="col s12 m12">
      <form>
        <div class="col s12 m5 input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i>Buscar</label>
          <i class="material-icons">close</i>
        </div>
        <div class="input-field col s12 m4">
          <select>
            <option value="0">Todas Matérias</option>
            <option value="1">Matéria X</option>
            <option value="2">Matéria Y</option>
            <option value="3">Matéria Z</option>
          </select>
        </div>
        <div class="input-field col s12 m3">
          <a class="btn btn-large modal-trigger indigo darken-4  right" href="#modal1">Adicionar Atividade</a>
        </div>
      </form>
    </div>
  </div>
  <div class="divider"></div> 
  
  <h5 class="center">Atividades Cadastradas</h5> 
  
  <div class="row">
    <div class="col s12 m12">
      <ul id="list" class="collection">
        <?php for($i=0;$i<20;$i++): ?>
          <a class="collection-item modal-trigger" href="#modal1">
            <span class="title">Matéria X - assunto</span>
            <div class="secondary-content">
              <i class="material-icons">edit</i>
            </div>
          </a>
        <?php endfor; ?>
      </ul>     
    </div>
  </div>

  <div class="center">
    <ul class="pagination">
      <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
      <li class="active"><a href="#!">1</a></li>
      <li class="waves-effect"><a href="#!">2</a></li>
      <li class="waves-effect"><a href="#!">3</a></li>
      <li class="waves-effect"><a href="#!">4</a></li>
      <li class="waves-effect"><a href="#!">5</a></li>
      <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
  </div>

</div>

 <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content"> 
        <h4>Adicionar Atividade</h4>

      <div class="input-field">
        <select>
          <option value="" disabled selected>Matéria</option>
          <option value="1">Matéria X</option>
          <option value="2">Matéria Y</option>
          <option value="3">Matéria Z</option>
        </select>
      </div>
      <div class="input-field">
        <input name="assunto" type="text" class="validate" required>
        <label for="assunto">Assunto</label>
      </div>
      <h5>Marcações</h5>
      <div class="input-field">
      <div class="row">
        <div class="col s9 m9">
          <input name="tags" type="text">
          <label for="tags">Novas Marcações</label>
        </div>
        <div class="col s3 m3">
          <button class="btn" type="submit" id="addTag">Adicionar</button>
        </div>
      </div>
      </div>
      <div id="tags">
        <?php for($i=1;$i<6;$i++): ?>
        <div class="chip">
          Marcação<?php echo $i;?>
          <i class="material-icons">close</i>
        </div>
        <?php endfor; ?>
      </div>

      <br/>
      <h5>Indicações</h5>
      <textarea name="indicacoes" class="materialize-textarea validate" required></textarea>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Adicionar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Excluir</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Fechar</a>
    </div>
  </div>

<?php include('footerNav.php'); ?>  
<?php include('footer.php'); ?>  