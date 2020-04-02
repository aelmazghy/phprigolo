<?php

if ($_SERVER['REQUEST_URI']=='/helpers/') {
    $TitrePage = $menu['Les helpers']['titre'];
    $DescriptionPage = $menu['Les helpers']['description'];
    $KeywordsPage = $menu['Les helpers']['keywords'];
}
elseif ($_SERVER['REQUEST_URI']=='/classe/'){
    $TitrePage = $menu['La classe']['titre'];
    $DescriptionPage = $menu['La classe']['description'];
    $KeywordsPage = $menu['La classe']['keywords'];
}
elseif ($_SERVER['REQUEST_URI']=='/note/'){
    $TitrePage = $menu['La note']['titre'];
    $DescriptionPage = $menu['La note']['description'];
    $KeywordsPage = $menu['La note']['keywords'];
}
elseif ($_SERVER['REQUEST_URI']=='/menu/'){
    $TitrePage = $menu['Le menu']['titre'];
    $DescriptionPage = $menu['Le menu']['description'];
    $KeywordsPage = $menu['Le menu']['keywords'];
}
elseif ($_SERVER['REQUEST_URI']=='/referencement/'){
    $TitrePage = $menu['Le référencement']['titre'];
    $DescriptionPage = $menu['Le référencement']['description'];
    $KeywordsPage = $menu['Le référencement']['keywords'];
}
elseif ($_SERVER['REQUEST_URI']=='/vignettes/'){
    $TitrePage = $menu['Les vignettes']['titre'];
    $DescriptionPage = $menu['Les vignettes']['description'];
    $KeywordsPage = $menu['Les vignettes']['keywords'];
}
elseif ($_SERVER['REQUEST_URI']=='/morpion/'){
    $TitrePage = $menu['Le morpion']['titre'];
    $DescriptionPage = $menu['Le morpion']['description'];
    $KeywordsPage = $menu['Le morpion']['keywords'];
}
elseif ($_SERVER['REQUEST_URI']=='/news/'){
    $TitrePage = $menu['news']['titre'];
    $DescriptionPage = $menu['news']['description'];
    $KeywordsPage = $menu['news']['keywords'];
}
elseif ($_SERVER['REQUEST_URI']=='/fichier-csv/'){
    $TitrePage = $menu['fichierCSV']['titre'];
    $DescriptionPage = $menu['fichierCSV']['description'];
    $KeywordsPage = $menu['fichierCSV']['keywords'];
}
else{
    $TitrePage = 'Titre page';
    $DescriptionPage = 'Description page';
    $KeywordsPage = 'Keyword page';
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php echo $TitrePage ?></title>
    <meta name="description" content="<?php echo $DescriptionPage ?>" />
    <meta name="keywords" content="<?php echo $KeywordsPage ?>">

    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/menufullpage.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.cropit.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>

</head>

<body>

<a href="#menu" class="menu-link">
    <span>toggle menu</span>
</a>
<!-- Début menu à remplacer avec les tableaux de config.php -->
<nav id="menu" class="panel" role="navigation">
    <ul>

        <?php
        if ($NbreElementLigne == 1) {
            echo '
				<li><div><a href="'.$menu['Les helpers']['link'].'">'.$menu['Les helpers']['titre'].'</a></div></li>
				<li><div><a href="'.$menu['La classe']['link'].'">'.$menu['La classe']['titre'].'</a></div></li>
				<li><div><a href="'.$menu['La note']['link'].'">'.$menu['La note']['titre'].'</a></div></li>
				<li><div><a href="'.$menu['Le menu']['link'].'">'.$menu['Le menu']['titre'].'</a></div></li>
				<li><div><a href="'.$menu['Le référencement']['link'].'">'.$menu['Le référencement']['titre'].'</a></div></li>
				<li><div><a href="'.$menu['Les vignettes']['link'].'">'.$menu['Les vignettes']['titre'].'</a></div></li>
				<li><div><a href="'.$menu['Le morpion']['link'].'">'.$menu['Le morpion']['titre'].'</a></div></li>
				<li><div><a href="'.$menu['news']['link'].'">'.$menu['news']['titre'].'</a></div></li>
				<li><div><a href="'.$menu['fichierCSV']['link'].'">'.$menu['fichierCSV']['titre'].'</a></div></li>
				';
        }

        if ($NbreElementLigne == 2) {
            echo '
 	    <li>
            <div><a href="'.$menu['Les helpers']['link'].'">'.$menu['Les helpers']['titre'].'</a></div>
			<div><a href="'.$menu['La classe']['link'].'">'.$menu['La classe']['titre'].'</a></div>
		</li>
 	    <li>
			<div><a href="'.$menu['La note']['link'].'">'.$menu['La note']['titre'].'</a></div>
		    <div><a href="'.$menu['Le menu']['link'].'">'.$menu['Le menu']['titre'].'</a></div>
		</li>
		<li>
            <div><a href="'.$menu['Le référencement']['link'].'">'.$menu['Le référencement']['titre'].'</a></div>
			<div><a href="'.$menu['Les vignettes']['link'].'">'.$menu['Les vignettes']['titre'].'</a></div>
		</li>
		<li>
			<div><a href="'.$menu['Le morpion']['link'].'">'.$menu['Le morpion']['titre'].'</a></div>
			<div><a href="'.$menu['news']['link'].'">'.$menu['news']['titre'].'</a></div>
		</li>
		<li><div><a href="'.$menu['fichierCSV']['link'].'">'.$menu['fichierCSV']['titre'].'</a></div></li>

		
		';
        }

        if ($NbreElementLigne == 3) {
            echo '
 	    <li>
            <div><a href="'.$menu['Les helpers']['link'].'">'.$menu['Les helpers']['titre'].'</a></div>
			<div><a href="'.$menu['La classe']['link'].'">'.$menu['La classe']['titre'].'</a></div>
			<div><a href="'.$menu['La note']['link'].'">'.$menu['La note']['titre'].'</a></div>
		</li>
 	    <li>
		    <div><a href="'.$menu['Le menu']['link'].'">'.$menu['Le menu']['titre'].'</a></div>
            <div><a href="'.$menu['Le référencement']['link'].'">'.$menu['Le référencement']['titre'].'</a></div>
			<div><a href="'.$menu['Les vignettes']['link'].'">'.$menu['Les vignettes']['titre'].'</a></div>
		</li>
		<li>
			<div><a href="'.$menu['Le morpion']['link'].'">'.$menu['Le morpion']['titre'].'</a></div>
			<div><a href="'.$menu['news']['link'].'">'.$menu['news']['titre'].'</a></div>
            <div><a href="'.$menu['fichierCSV']['link'].'">'.$menu['fichierCSV']['titre'].'</a></div>
        </li>
		';
        }

        if ($NbreElementLigne == 4) {
            echo '
 	    <li>
            <div><a href="'.$menu['Les helpers']['link'].'">'.$menu['Les helpers']['titre'].'</a></div>
			<div><a href="'.$menu['La classe']['link'].'">'.$menu['La classe']['titre'].'</a></div>
			<div><a href="'.$menu['La note']['link'].'">'.$menu['La note']['titre'].'</a></div>
		    <div><a href="'.$menu['Le menu']['link'].'">'.$menu['Le menu']['titre'].'</a></div>
		</li>
 	    <li>
            <div><a href="'.$menu['Le référencement']['link'].'">'.$menu['Le référencement']['titre'].'</a></div>
			<div><a href="'.$menu['Les vignettes']['link'].'">'.$menu['Les vignettes']['titre'].'</a></div>
			<div><a href="'.$menu['Le morpion']['link'].'">'.$menu['Le morpion']['titre'].'</a></div>
			<div><a href="'.$menu['news']['link'].'">'.$menu['news']['titre'].'</a></div>
		</li>
		<li>
            <div><a href="'.$menu['fichierCSV']['link'].'">'.$menu['fichierCSV']['titre'].'</a></div>
        </li>
		';
        }

        ?>



        <ul>





            <!--

                <ul>
          <li>
              <div><a href="/helpers/">Les helpers</a></div>
              <div><a href="/classe/">La classe</a></div>
              <div><a href="/note/">La note</a></div>
          </li>
          <li>
              <div><a href="/menu/">Le menu</a></div>
              <div><a href="/referencement/">Référencement</a></div>
              <div><a href="/vignettes/">Les vignettes</a></div>
          </li>
          <li>
              <div><a href="/morpion/">Le morpion</a></div>
              <div><a href="/news/">Les news</a></div>
              <div><a href="/fichier-csv/">Fichier CSV</a></div>
          </li>

          </ul>
      -->
</nav>
<!-- Fin menu à remplacer avec les tableaux de config.php -->
