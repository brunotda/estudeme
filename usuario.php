<?php $namepage = "Painel"; ?>
<?php include('header.php'); ?>
<?php include('headerNav.php'); ?>

<div class="section grey lighten-4"> 
  <div class="row">
    <div class="col s12 m4 offset-m4 center">
      <form>
        
        <div class="file-field input-field">
            <img src="images/usuario.png" class="circle" alt="Usuário"/>
            <span><i class="material-icons prefix">edit</i></span>
            <input type="file">
        </div>

        <h5 class="center nomargin grey-text text-darken-4 noline">Demo</h5>
        <h6 class="center nomargin grey-text text-darken-4 noline">0000.0000-0000</h6>

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

      </form>
    </div>
  </div>
</div>

<?php include('footerNav.php'); ?>  
<?php include('footer.php'); ?>  