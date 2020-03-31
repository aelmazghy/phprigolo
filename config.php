<?php
session_start(); 
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');

define('NOM_DB', 'phpexo');
define('UTILISATEUR_DB', 'root');
define('MDP_DB', 'root');

$dbconnexion = new PDO('mysql:host=localhost;dbname='.NOM_DB, UTILISATEUR_DB, MDP_DB, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$NbreElementLigne = 4;

$menu['Les helpers'] = array();
$menu['Les helpers']['link'] = '/helpers/';
$menu['Les helpers']['titre'] = 'Les helpers';
$menu['Les helpers']['description'] = 'Exercice sur le PHP helpers';
$menu['Les helpers']['keywords'] = 'php,exo,exercice,helpers';

$menu['La classe']= array();
$menu['La classe']['link'] = '/classe/';
$menu['La classe']['titre'] = 'La classe';
$menu['La classe']['description'] = 'Exercice sur le PHP classe';
$menu['La classe']['keywords'] = 'php,exo,exercice,classe';

$menu['La note'] = array();
$menu['La note']['link'] = '/note/';
$menu['La note']['titre'] = 'La note';
$menu['La note']['description'] = 'Exercice sur le PHP note';
$menu['La note']['keywords'] = 'php,exo,exercice,note';

$menu['Le menu'] = array();
$menu['Le menu']['link'] = '/menu/';
$menu['Le menu']['titre'] = 'Le menu';
$menu['Le menu']['description'] = 'Exercice sur le PHP menu';
$menu['Le menu']['keywords'] = 'php,exo,exercice,menu';

$menu['Le référencement'] = array();
$menu['Le référencement']['link'] = '/referencement/';
$menu['Le référencement']['titre'] = 'Référencement';
$menu['Le référencement']['description'] = 'Exercice sur le PHP Référencement';
$menu['Le référencement']['keywords'] = 'php,exo,exercice,Référencement';

$menu['Les vignettes'] = array();
$menu['Les vignettes']['link'] = '/vignettes/';
$menu['Les vignettes']['titre'] = 'Les vignettes';
$menu['Les vignettes']['description'] = 'Exercice sur le PHP vignettes';
$menu['Les vignettes']['keywords'] = 'php,exo,exercice,vignettes';

$menu['Le morpion'] = array();
$menu['Le morpion']['link'] = '/morpion/';
$menu['Le morpion']['titre'] = 'Le morpion';
$menu['Le morpion']['description'] = 'Exercice sur le PHP morpion';
$menu['Le morpion']['keywords'] = 'php,exo,exercice,morpion';

$menu['news'] = array();
$menu['news']['link'] = '/news/';
$menu['news']['titre'] = 'Les news';
$menu['news']['description'] = 'Exercice sur le PHP news';
$menu['news']['keywords'] = 'php,exo,exercice,news';

$menu['fichierCSV'] = array();
$menu['fichierCSV']['link'] = '/fichier-csv/';
$menu['fichierCSV']['titre'] = 'Fichier CSV';
$menu['fichierCSV']['description'] = 'Exercice sur le PHP CSV';
$menu['fichierCSV']['keywords'] = 'php,exo,exercice, CSV';
  ?>
