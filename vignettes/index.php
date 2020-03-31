<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>


<?php

function update_img($NomVignette_tmp,$NomVignette)
{
    move_uploaded_file($NomVignette_tmp, 'vignettes/' . $NomVignette);
}

if(isset($_POST['upload'])){
    $NomVignette = $_FILES['NomVignette']['name'];
    $NomVignette_tmp = $_FILES['NomVignette']['tmp_name'];

    if(!empty($NomVignette)){

        $NomVignette_ext = end(explode('.',$NomVignette));
        if(in_array($NomVignette_ext,array('png','jpg','jpeg'))){
            update_img($NomVignette_tmp,$NomVignette);
            echo "<h2>Image upload ^_^ Yopii</h2>";
        }
        else{
            echo"error";
        }
    }
}
?>



    <div class="general-content">
    <h1>Les vignettes</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Vous devez faire le script pour que les vignettes soient enregistrées dans le répertoires "vignettes", les vignettes dans ce répertoire doivent être visibles sur cette page. La vignette doit avoir le même nom que le fichier original. Pour info, le format pour l'image envoyée par le formulaire est un .png, il vous faudra donc convertir d'une manière ou d'une autre l'image téléchargée pour que l'image finale soit au format .jpg
    </p>
    <h2>Faire une vignette</h2>
    <div>
        <div class="image-uploader">
            <form action="/vignettes/"  method="post" enctype="multipart/form-data">
                <div class="image-editor">
                    <input type="file" class="cropit-image-input btn btn-default btn-lg" name="NomVignette">
                    <div class="cropit-preview"></div>
                    <div class="image-size-label">
                        Redimensionner l'image
                    </div>
                    <input type="range" class="cropit-image-zoom-input">
                    <input type="hidden" name="image-data" class="hidden-image-data" />
                    <button type="submit" name="upload" class="btn btn-default btn-lg">Enregistrer la vignette</button>
                </div>
            </form>
        </div>
    </div>
    <h2>Vignettes disponibles</h2>
    <!-- début gallerie image -->
    <?php
    $allimg = glob('vignettes/*.{jpg,png,gif}', GLOB_BRACE);
    foreach($allimg as $img) {
        ?>
        <img src="<?php echo $img?>" class="vignettes"/>
    <?php }?>
    <!-- Fin gallerie image -->
    <script>
        $(document).ready(function() {
            $('.menu-link').menuFullpage();
        } );
    </script>
    <script>
        $(function() {
            $('.image-editor').cropit();

            $('form').submit(function() {
                var imageData = $('.image-editor').cropit('export');
                $('.hidden-image-data').val(imageData);

                return true;
            });
        });
    </script>
<?php  include '../footer.php'; ?>