<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>
<?php


//select 4 eleves
$selectEleve = $dbconnexion->query('SELECT * FROM users ORDER BY RAND() LIMIT 4');
$selectEleve->execute();
$selectEleve->setFetchMode(PDO::FETCH_ASSOC);

?>


    <div class="general-content">
    <h1>Les helpers</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Faites une requête dans la base de données liées à ces exercices pour retourner la totalité des apprenants. Faites du PHP pour mélanger ce résultat et obtenir 4 apprenants au hasard.
    </p>
    <h2>Résultat</h2>


    <?php
    foreach ($selectEleve->fetchAll() as $key => $value) {
        echo'<div class="choix-aleatoire">'.$value["nom"]. ' ' .$value["prenom"].'</div>';
    }
    ?>

    <script>
        $(document).ready(function() {
            $('.menu-link').menuFullpage();
        } );
    </script>
<?php  include '../footer.php'; ?>