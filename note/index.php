<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>
<?php

// recuperation fichier JSON - note.txt
$json = file_get_contents('note.txt');
$notes = (json_decode($json, true));

// ini var
if (isset($_POST['helpers'])) {$helpers = $_POST['helpers'];}
if (isset($_POST['classe'])) {$classe = $_POST['classe'];}
if (isset($_POST['note'])) {$note = $_POST['note'];}
if (isset($_POST['menu'])) {$menu = $_POST['menu'];}
if (isset($_POST['referencement'])) {$referencement = $_POST['referencement'];}
if (isset($_POST['vignettes'])) {$vignettes = $_POST['vignettes'];}
if (isset($_POST['morpion'])) {$morpion = $_POST['morpion'];}
if (isset($_POST['news'])) {$news = $_POST['news'];}
if (isset($_POST['csv'])) {$csv = $_POST['csv'];}

$varTotal = 0;
$notResult = $notes['qsdfV45']; // note = 0


// si l'utilisateur clique sur submit
if (isset($_POST['submit'])) {
    
// note = 1 
  if ($helpers == 'lhGtF62') {
      $helpersnote = $notes['lhGtF62'];
    }
  else{
    $helpersnote = $notResult;
  }
  if ($classe == 'lhGtF62') {
      $classenote = $notes['lhGtF62'];
    }
  else{
    $classenote = $notResult;
  }
    if ($note == 'lhGtF62') {
      $notenote = $notes['lhGtF62'];
    }
  else{
    $notenote = $notResult;
  }
// note = 2
  if ($menu == 'GFoP5s') {
      $menunote = $notes['GFoP5s'];
    }
  else{
    $menunote = $notResult;
  }
  if ($referencement == 'GFoP5s') {
      $referencementnote = $notes['GFoP5s'];
    }
  else{
    $referencementnote = $notResult;
  }
  if ($vignettes == 'GFoP5s') {
      $vignettesnote = $notes['GFoP5s'];
    }
  else{
    $vignettesnote = $notResult;
  }
// note = 4
  if ($morpion == 'MvDF34') {
      $morpionnote = $notes['MvDF34'];
    }
  else{
    $morpionnote = $notResult;
  }
  if ($news == 'MvDF34') {
      $newsnote = $notes['MvDF34'];
    }
  else{
    $newsnote = $notResult;
  }

// note = 3
  if ($csv == 'YvKJhc23') {
      $csvnote = $notes['YvKJhc23'];
    }
  else{
    $csvnote = $notResult;
  }
  
  $varTotal = $csvnote+$newsnote+$morpionnote+$vignettesnote+$referencementnote+$menunote+$notenote+$classenote+$helpersnote;

} // end if submit

?>

<div class="general-content">
<h1>La note</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Calculez vous même votre note en utilisant le formulaire suivant. Attention, les notes sont dans le fichier note.txt au format JSON, vous devez faire la correspondance entre ces données et les données envoyées par le formulaire.
    </p>

<!-- Début de votre PHP-->
<div class="MegaNote"><?php echo  $varTotal; ?>/20</div>
<!-- Fin de votre PHP-->
    
<h2>Avez-vous réussi les exercices suivants :</h2>
<form action="/note/" method="post" id="exo">
  <table class="table table-striped">
  <tbody>
    <tr>
      <td class="lead">Exercice "Les helpers"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="helpers" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="helpers" value="lhGtF62">OUI
    </label></td>
    </tr>
    <tr>
      <td class="lead">Exercice "La classe"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="classe" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="classe" value="lhGtF62">OUI
    </label></td>
    </tr>
     <tr>
      <td class="lead">Exercice "La note"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="note" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="note" value="lhGtF62">OUI
    </label></td>
    </tr>
      <tr>
      <td class="lead">Exercice "Le menu"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="menu" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="menu" value="GFoP5s">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Référencement"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="referencement" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="referencement" value="GFoP5s">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Vignettes"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="vignettes" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="vignettes" value="GFoP5s">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Morpion"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="morpion" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="morpion" value="MvDF34">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">News"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="news" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="news" value="MvDF34">OUI
    </label></td>
    </tr>
        <tr>
      <td class="lead">Exercice "Fichier CSV"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="csv" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="csv" value="YvKJhc23">OUI
    </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><button type="submit" class="btn btn-default btn-lg" form="exo" value="Submit" name="submit">Calculer ma note</button></td>
    </tr>
  </tbody>
</table>


</form>

<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
} );
</script>
<?php  include '../footer.php'; ?>