<?php $namepage = "Painel"; ?>
<?php include('header.php'); ?>
<?php include('headerNav.php'); ?>

<div class="section grey lighten-4">
  <div class="row">
    <div class="col s12 m12">
      <h5>Adicionar Marcações</h5>
      <form>
        <div class="input-field">
          <div class="row">
            <div class="col s9 m9">
              <input name="tags" type="text" class="validate" required>
              <label for="tags">Novas Marcações</label>
            </div>
            <div class="col s3 m3">
              <button class="btn indigo darken-4" type="submit" id="addTag">Adicionar</button>
            </div>
          </div>
        </div>
      </form>
      <div class="divider"></div>
      <h5>Marcações Ativas</h5>

      <div id="tags">
        <?php for($i=1;$i<6;$i++): ?>
        <div class="chip">
          Marcação<?php echo $i;?>
          <i class="material-icons">close</i>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</div>

<?php include('footerNav.php'); ?>  
<?php include('footer.php'); ?>  