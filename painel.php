<?php $namepage = "Painel"; ?>
<?php include('header.php'); ?>
<?php include('headerNav.php'); ?>

<div class="section grey lighten-4">
  
  <div class="row">
    <div class="col s12 m12">
      <form>
        <div class="col s12 m6 input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i>Buscar</label>
          <i class="material-icons">close</i>
        </div>
        <div class="input-field col s12 m3">
          <select>
            <option value="0">Todas Matérias</option>
            <option value="1">Matéria X</option>
            <option value="2">Matéria Y</option>
            <option value="3">Matéria Z</option>
          </select>
        </div>
        <div class="col s12 m3 input-field">
          <select>
            <option value="0">Todas Atividades</option>
            <option value="1">Atividades Pendentes</option>
            <option value="2">Atividades Confirmadas</option>
          </select>
        </div>
      </form>
    </div>
  </div>
    
  <div class="row">
    <div class="col s12 m6">
      <ul id="list" class="collection">
        <?php for($i=0;$i<20;$i++): ?>
          <a class="collection-item modal-trigger" href="#modal1">
            <span class="title">Matéria X - assunto</span>
            <div class="secondary-content">
              <i class="material-icons">control_point</i>
            </div>
          </a>
        <?php endfor; ?>
      </ul>     
    </div>
    <div class="col s12 m6">
      <ul id="list" class="collection">
        <?php for($i=0;$i<20;$i++): ?>
          <a class="collection-item modal-trigger" href="#modal1">
            <span class="title">Matéria X - assunto</span>
            <div class="secondary-content">
              <i class="material-icons">control_point</i>
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
      <h4>Matéria X</h4>
      <h5>Assunto</h5>
      <p>Texto/vídeo de orientação para o estudo.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Confirmar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Fechar</a>
    </div>
  </div>

<?php include('footerNav.php'); ?>  
<?php include('footer.php'); ?>  