<?php // PHP 5

//On appelle la page classe_geometrie.php
require_once('traitement/classe_geometrie.php');

//-----------------------------------------//
//  PARAMETRES TRIANGLE
//-----------------------------------------//
$Triangle_Hauteur = $_POST['Triangle_Hauteur'];
$Triangle_Base = $_POST['Triangle_Base'];
$Triangle_DecalageBase = $_POST['Triangle_DecalageBase'];

//-----------------------------------------//
//  PARAMETRES CERCLE
//-----------------------------------------//
$Cercle_Rayon = $_POST['Cercle_Rayon'];

//-----------------------------------------//
//  PARAMETRES RECTANGLE
//-----------------------------------------//
$Rectangle_Largeur = $_POST['Rectangle_Largeur'];
$Rectangle_Longueur = $_POST['Rectangle_Longueur'];

//-----------------------------------------//
//  PARAMETRES FONCTIONX2
//-----------------------------------------//
$A = $_POST['A'];
$N = $_POST['N'];
$B = $_POST['B'];

//-----------------------------------------//
//  PARAMETRES CYLINDRE
//-----------------------------------------//
$Cylindre_Hauteur = $_POST['Cylindre_Hauteur'];
$Cylindre_Rayon = $_POST['Cylindre_Rayon'];

//-----------------------------------------//
//  PARAMETRES CONE
//-----------------------------------------//
$Cone_Hauteur = $_POST['Cone_Hauteur'];
$Cone_Rayon = $_POST['Cone_Rayon'];

//-----------------------------------------//
//  PARAMETRES SPHERE
//-----------------------------------------//
$Sphere_Rayon = $_POST['Sphere_Rayon'];

//-----------------------------------------//
//  PARAMETRES PARALLELEPIPEDE
//-----------------------------------------//
$Parallelepipede_Hauteur = $_POST['Parallelepipede_Hauteur'];
$Parallelepipede_Largeur = $_POST['Parallelepipede_Largeur'];
$Parallelepipede_Longueur = $_POST['Parallelepipede_Longueur'];

?>