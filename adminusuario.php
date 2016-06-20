<?php $namepage = "Painel"; ?>
<?php include('header.php'); ?>
<?php include('headerNav.php'); ?>

<div class="section grey lighten-4">
  <div class="row">
    <div class="col s12 m12">
      <div class="col s12 m9 input-field">
        <input id="search" type="search" required>
        <label for="search"><i class="material-icons">search</i>Buscar</label>
        <i class="material-icons">close</i>
      </div>
      <div class="input-field col s12 m3">
        <button class="btn indigo darken-4 modal-trigger" type="submit" href="#modal1">Novo Usuário</button>
      </div>
    </div>
  </div>

  <div class="divider"></div> 

  <h5 class="center">Usuários Cadastrados</h5> 
  <div class="row">
    <div class="col s12 m12">
      <ul id="list" class="collection">
          <a class="collection-item modal-trigger" href="#modal1">
            <span class="title">Usuário Demo</span>
            <div class="secondary-content">
              <i class="material-icons">edit</i>
            </div>
          </a>
      </ul>     
    </div>
  </div>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content"> 
    
    <h4>Atualizar Usuário</h4>

    <div class="input-field">
      <i class="material-icons prefix">perm_identity</i>
      <input name="nome" type="text" class="validate" value="Demo" required>
      <label for="nome">Nome</label>
    </div>

    <div class="input-field">
      <i class="material-icons prefix">contacts</i>
      <input name="registro" type="text" class="validate" value="0000.0000-0000" required>
      <label for="registro">Registro</label>
    </div>

    <div class="input-field">
      <i class="material-icons prefix">email</i>
      <input name="email" type="email" class="validate" value="aluno@email.com" required>
      <label for="email">Email</label>
    </div>

    <div class="input-field">
      <i class="material-icons prefix">phone</i>
      <input name="telefone" type="tel" class="validate" value="(11) 0000-0000" required>
      <label for="telefone">Telefone</label>
    </div>

    <div class="input-field">
      <i class="material-icons prefix">stay_current_portrait</i>
      <input name="celular" type="tel" class="validate" value="(11) 00000-0000" required>
      <label for="celular">Celular</label>
    </div>

    <div class="input-field">
      <i class="material-icons prefix">lock_outline</i>
      <input name="password" type="password" class="validate" value="0000000000" required>
      <label for="password">Senha</label>
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
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Atualizar</a>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Excluir</a>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Fechar</a>
  </div>
</div>
<?php include('footerNav.php'); ?>  
<?php include('footer.php'); ?>  