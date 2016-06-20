<?php $namepage = "Esqueci Minha Senha"; ?>
<?php include('header.php'); ?>

<div class="section fullscreen grey lighten-2">
  <div class="row">
    <div class="col s12 m4 offset-m4  grey lighten-5">
      <div class="row center nomargin">
        <img id="logotipo_login" src="images/estudeme.png" alt="Estude.Me"/>
      </div>
      <?php if(!empty($_POST['cpf'])): ?>
        <div class="row">
          <div class="input-field col s12 m10 offset-m1 nomargin center green-text text-darken-2">
            <p>Os dados de acesso foram enviados para o e-mail cadastrado, caso não lembre do e-mail, entre em contato com a instituição.</p>
          </div>
        </div>  
      <?php else: ?>
      <form method="post">
        <div class="row">
          <div class="input-field col s12 m10 offset-m1 nomargin">
            <i class="material-icons prefix">perm_identity</i>
            <input name="cpf" id="cpf" type="text" class="validate" required>
            <label for="cpf">CPF</label>
          </div>
        </div>           
        <div class="row">
          <div class="input-field col s12 m10 offset-m1 nomargin">
            <button class="col s12 indigo darken-4 waves-effect waves-light btn-large" type="submit" name="loginRecuperar">
              Recuperar usuário
            </button>
          </div>
        </div>
      </form>
    <?php endif; ?>
    </div>
    <a href="login.php"  class="col s12 m4 offset-m4  amber accent-4 center grey-text text-darken-3 waves-effect waves-light btn-large">Voltar ao login</a>
  </div>
</div>

<?php include('footer.php'); ?>  