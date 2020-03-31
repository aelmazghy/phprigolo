<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>
<?php

//select eleves
$selectEleve = $dbconnexion->query('SELECT nom,prenom,TIMESTAMPDIFF(YEAR, date_naissance,NOW()) AS age FROM users ');
$selectEleve->execute();
$selectEleve->setFetchMode(PDO::FETCH_ASSOC);

?>



    <div class="general-content">
        <h1>La classe</h1>
        <h2>Explications sur l'exercice</h2>
        <p>Faites une requête dans la base de données users, vous devez remonter les informations, nom, prenom et date_naissance. La date de naissance doit être transformée pour donner l'âge de la personne. Vous devez faire une fonction pour la convertion date de naissance / âge.
        </p>
        <h2>Résultat</h2>
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>

            </tr>
            </tfoot>
            <tbody>

            <?php
            foreach ($selectEleve->fetchAll() as $key => $value) {
                echo '
                    <tr>
                        <td>'.$value["nom"].'</td>
                        <td>'.$value["prenom"].'</td>
                        <td>'.$value["age"].'</td>
                    </tr>
                ';
            }


            ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('.menu-link').menuFullpage();
            $('#example').DataTable( {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/French.json"
                }
            } );
        } );
    </script>
<?php  include '../footer.php'; ?>