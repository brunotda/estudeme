<?php if (!empty($_POST)) if($_POST['usuario']=='demo' && $_POST['password']=='demo') header('Location: painel.php'); ?>

<?php $namepage = "Acessar Conta"; ?>
<?php include('header.php'); ?>

<div class="section fullscreen grey lighten-2">
  <div class="row">
    <div class="col s12 m4 offset-m4  grey lighten-5">
      <div class="row center nomargin">
        <img id="logotipo_login" src="images/estudeme.png" alt="Estude.Me"/>
      </div>
      <form method="post">
        <div class="row">
          <div class="input-field col s12 m10 offset-m1 nomargin">
            <i class="material-icons prefix">perm_identity</i>
            <input name="usuario" type="text" class="validate" required>
            <label for="usuario">Usuário: <span>demo</span></label>
          </div>
        </div>        
        <div class="row">
          <div class="input-field col s12 m10 offset-m1 nomargin">
            <i class="material-icons prefix">lock_outline</i>
            <input name="password" type="password" class="validate" required>
            <label for="password">Senha: <span>demo</span></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m10 offset-m1 nomargin">
            <button class="col s12 indigo darken-4 waves-effect waves-light btn-large" type="submit" name="login">
              Entrar
            </button>
          </div>
        </div>
      </form>
    </div>
    <a href="loginRecuperar.php"  class="col s12 m4 offset-m4  amber accent-4 center grey-text text-darken-3 waves-effect waves-light btn-large">Esqueci Minha Senha</a>
  </div>
</div>

<?php include('footer.php'); ?>