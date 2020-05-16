<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="ODC Test">
  <meta name="author" content="Hamza Abdaoui">
  <title>ODC Test</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="http://www.odc.tn/communaute/css/style.css" rel="stylesheet">
</head>

<body>
  <main role="main" class="container">
    <form class="form" action="storeData.php" method="post" enctype="multipart/form-data" novalidate="">
      <h2>ODC PHP Test</h2>

      <?php
        if (isset($_GET['success']) == true && $_GET['success'] == 1)
            echo "<div class='alert alert-success' role='alert'>Insertion avec succes!</div>";
      ?>

      <!-- Form page 1 start -->
      <div class="form-section">
        <div class="form-group">
          <label for="titre">Vous êtes : <span class="form-required">*</span></label>
          <select class="custom-select" name="titre" required="">
              <option value="" selected>Sélectionnez</option>
              <option value="1">Homme</option>
              <option value="2">Femme</option>
          </select>
        </div>
        <div class="form-group">
          <label for="s_familiale">Situation familliale <span class="form-required">*</span></label>
          <select class="custom-select" name="s_familiale" required="">
              <option value="" selected>Sélectionnez</option>
              <option value="1">Etudiant</option>
              <option value="2">Marié</option>
              <option value="3">Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Email <span class="form-required">*</span></label>
          <input type="email" required="" class="form-control" name="email" data-parsley-group="block-1">
        </div>
        <div class="form-group">
          <label for="tel">N° mobile <span class="form-required">*</span></label>
          <input type="number" required="" class="form-control" name="tel" data-parsley-group="block-1">
        </div>
      </div>
      <!-- Form page 1 end -->

      <!-- Form page 2 start -->
      <div class="form-section">
        <div class="form-group">
          <label for="nom">Nom <span class="form-required">*</span></label>
          <input type="text" class="form-control" name="nom" required="" data-parsley-group="block-2">
        </div>
        <div class="form-group">
          <label for="prenom">Prénom <span class="form-required">*</span></label>
          <input type="text" class="form-control" name="prenom" required="" data-parsley-group="block-2">
        </div>
        <div class="form-group">
          <label for="date_naissance">Date de naissance <span class="form-required">*</span></label>
          <input type="text" class="form-control naissanceDatePicker" name="date_naissance" required="" data-parsley-group="block-2">
        </div>
        <div class="form-group">
          <label for="profession ">Profession <span class="form-required">*</span></label>
          <input type="text" class="form-control" name="profession" required="" data-parsley-group="block-2">
        </div>
          <div class="form-group">
              <label for="adresse">Adresse <span class="form-required">*</span></label>
              <input type="text" class="form-control" name="adresse" required="" data-parsley-group="block-2">
          </div>
          <div class="form-group">
              <label for="ville">Ville <span class="form-required">*</span></label>
              <input type="text" class="form-control" name="ville" required="" data-parsley-group="block-2">
          </div>
          <div class="form-group">
              <label for="pays">Pays de résidence <span class="form-required">*</span></label>
              <select class="custom-select" name="pays">
                  <option value="" selected>Sélectionnez</option>
                  <option value="1">Tunisie</option>
                  <option value="2">Autres</option>
              </select>
          </div>
      </div>
      <!-- Form page 2 end -->

      <div class="form-navigation">
        <button type="button" class="previous btn btn-info" style="display: none;">&lt; Précédent</button>
        <button type="button" class="next btn btn-info">Suivant &gt;</button>
        <input name="register" type="submit" class="submit btn btn-default" style="display: none;">
        <span class="clearfix"></span>
      </div>
    </form>

  </main>
    <footer class="footer">
    <div class="row">
      <div class="col-12 col-md-12">
          <h2 class="text-center">ODC Test</h2>
      </div>
    </div>
  </footer>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    !function(a){a.fn.datepicker.dates.fr={days:["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"],daysShort:["Dim.","Lun.","Mar.","Mer.","Jeu.","Ven.","Sam."],daysMin:["D","L","Ma","Me","J","V","S"],months:["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"],monthsShort:["Janv.","Févr.","Mars","Avril","Mai","Juin","Juil.","Août","Sept.","Oct.","Nov.","Déc."],today:"Aujourd'hui",monthsTitle:"Mois",clear:"Effacer",weekStart:1,format:"yyyy-mm-dd"}}(jQuery);
  jQuery(document).ready(function() {
      jQuery('.naissanceDatePicker').datepicker({
          format: 'yyyy-mm-dd',
          todayHighlight: true,
          language: 'fr',
          showButtonPanel: true,
          endDate: '-1d'
      });
  });
</script>




</body></html>
