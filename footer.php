  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/simulate.js"></script>
  <script src="js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
    
    //tiny editor
    tinymce.init({
      selector: 'textarea',  // change this value according to your HTML
      menubar: false,  // removes the menubar
    });


    $(document).ready(function() {
      //Start Select
      $('select').material_select();
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal();
    });
  </script>

  </body>
</html>