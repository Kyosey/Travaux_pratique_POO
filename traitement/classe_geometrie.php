<?php // PHP 5

// Lors d'un héritage, il n'est pas nécessaire d'intégrer les paramètres public, private etc. de la classe mère au début de la classe fille
// Il est néanmoins nécessaire de les faire apparaître dans le constructeur de la classe fille et de réintégrer les fonctions propres à la classe mère pour le bon fonctionnement de cette dernière

//-----------------------------------------//
//  CLASSE FIGURE
//-----------------------------------------//
class Figure
{

	public $CodeFigure;
	public $NomFigure;

	// Affichera en toute fin la destruction de toute les formes construites
	function __destruct()
	{
        echo "<p style='background:#1c0522 ; color: #fff; font-size: 1.2em; text-align: left; padding-left: 1%;' > Destruction de la figure : ", $this->NomFigure, $this->CodeFigure, '</p>' ;
    }

}

//-----------------------------------------//
//  CLASSE TRIANGLE
//-----------------------------------------//
class Triangle extends Figure
{

	public $Type;
	public $Hauteur;
	public $Base;
	public $DecalageBase;

	function __construct($Hauteur, $Base, $DecalageBase)
	{
		$this->Hauteur = $Hauteur;
		$this->Base = $Base;
		$this->DecalageBase = $DecalageBase;
		$this->NomFigure = "Triangle";
		$this->CodeFigure = 1;
	}

	// Calcule la longueur des deux côtés en utilisant le théorème de Pythagore : a² + b² = c²
	function LongCote()
	{
		return(sqrt($this->Hauteur * $this->Hauteur + $this->DecalageBase * $this->DecalageBase) +
			sqrt($this->Hauteur * $this->Hauteur + ($this->Base - $this->DecalageBase) * ($this->Base - $this->DecalageBase)));
	}

	function Surface()
	{
		$this->Surface = $this->Base * $this->Hauteur / 2;
	}

	function Perimetre()
	{
		$this->Perimetre = $this->Base + $this->LongCote();
	}

	//function Dessiner()
	//{
	//
	//}

	function Afficher()
	{
		echo'<h1>Triangle</h1>
    	<hr style="color:#fff" width=100%>';
		echo'<br><p>Le triangle a un périmètre de : ', $this->Perimetre, '</p>';
		echo'<p>Le triangle a une surface de : ', $this->Surface, '</p><br>';
	}

}

//-----------------------------------------//
//  CLASSE CERCLE
//-----------------------------------------//
class Cercle extends Figure
{

	public $Rayon;

	function __construct($Rayon)
	{
		$this->Rayon = $Rayon;
		$this->NomFigure = "Cercle";
		$this->CodeFigure = 1;
	}

	// pi() permet de retourner la valeur de pi
	function Surface()
	{
		$this->Surface = $this->Rayon * $this->Rayon * pi();
	}

	function Perimetre()
	{
		$this->Perimetre = $this->Rayon * 2 * pi();
	}

	//function Dessiner()
	//{
	//	
	//}

	function Afficher()
	{
		echo'<h1>Cercle</h1>
    	<hr style="color:#fff" width=100%>';
		echo'<br><p>Le cercle a un rayon de : ', $this->Rayon, '</p>';
		echo'<p>Le cercle a une surface de : ', $this->Surface, '</p><br>';
	}

}

//-----------------------------------------//
//  CLASSE RECTANGLE
//-----------------------------------------//
class Rectangle extends Figure
{

	public $Largeur;
	public $Longueur;

	function __construct($Largeur, $Longueur)
	{
		$this->Largeur = $Largeur;
		$this->Longueur = $Longueur;
		$this->NomFigure = "Rectangle";
		$this->CodeFigure = 1;
	}

	function Surface()
	{
		$this->Surface = $this->Largeur * $this->Longueur;
	}

	function Perimetre()
	{
		$this->Perimetre = ($this->Largeur * 2) + ($this->Longueur * 2);
	}

	// Calcule la diagonale du rectangle en utilisant le théorème de Pythagore : AC² = AB² + BC² = L² + l²
	// sqrt() permet de retourner la racine carrée
	// pow() permet de retourner un nombre à la puissance demandée
	function Diagonale()
	{
		$this->Diagonale = sqrt(pow($this->Largeur,2) + pow($this->Longueur,2));
	}

	//function Dessiner(){
	//	
	//}

	function Afficher()
	{
		echo'<h1>Rectangle</h1>
    	<hr style="color:#fff" width=100%>';
		echo'<br><p>Le rectangle a un périmètre de : ', $this->Perimetre, '</p>';
		echo'<p>Le rectangle a une surface de : ', $this->Surface, '</p>';
		echo'<p>La diagonale du rectangle mesure : ', $this->Diagonale, '</p><br>';
	}

}

//-----------------------------------------//
//  CLASSE FONCTIONX2
//-----------------------------------------//
class FonctionX2 extends Figure
{

	public $A;
	public $N;
	public $B;

	function __construct($A, $N, $B)
	{
		$this->A=$A;
		$this->N=$N;
		$this->B=$B;
		$this->NomFigure = "FonctionX";
		$this->CodeFigure = 2;
	}

	function Aire($x, $y)
	{
		$this->Aire =  (($this->A / ($this->N+1)) * (pow($y, $this->N+1)) + ($this->B * $y)) - (($this->A / ($this->N+1)) * (pow($x, $this->N+1)) + ($this->B * $x));
	}

	function Afficher()
	{
		echo'<h1>FonctionX2</h1>
    	<hr style="color:#fff" width=100%>';
		echo'<br><p>La fonction a un coefficient directeur de : ', $this->A, '</p>';
		echo'<p>Une exponentiation de : ', $this->N, '</p>';
		echo'<p>Un décalage aux ordonnées de : ', $this->B, '</p>';
		echo'<p>L\'aire comprise entre ',$this->A,' et ',$this->N,' est de : ', $this->Aire, '</p><br>';
	}

}

//-----------------------------------------//
//  CLASSE CYLINDRE
//-----------------------------------------//
class Cylindre extends Cercle
{

	public $Hauteur;

	function __construct($Hauteur, $Rayon)
	{
		$this->Hauteur=$Hauteur;
		$this->Rayon = $Rayon;
		$this->NomFigure = "Cylindre";
		$this->CodeFigure = 1;
	}

	function Surface()
	{
		$this->Surface = $this->Rayon * $this->Rayon * pi();
	}

	function Volume()
	{
		$Aire = pi() * $this->Rayon * $this->Rayon;
		$this->Volume = $Aire * $this->Hauteur;
	}

	function Afficher()
	{
		echo'<h1>Cylindre</h1>
    	<hr style="color:#fff" width=100%>';
		echo'<br><p>Le cylindre a un rayon de : ', $this->Rayon, '</p>';
		echo'<p>Le cylindre a une surface de : ', $this->Surface, '</p>';
		echo'<p>Le cylindre a un volume de : ', $this->Volume, '</p><br>';
	}

}

//-----------------------------------------//
//  CLASSE CONE
//-----------------------------------------//
class Cone extends Cercle
{

	public $Hauteur;

	function __construct($Hauteur, $Rayon)
	{
		$this->Hauteur=$Hauteur;
		$this->Rayon = $Rayon;
		$this->NomFigure = "Cone";
		$this->CodeFigure = 1;
	}

	function Surface()
	{
		$this->Surface = $this->Rayon * $this->Rayon * pi();
	}

	function Volume()
	{
		$this->Volume = 1/3 * (pi() * $this->Rayon * $this->Rayon) * ($this->Hauteur);
	}

	function Afficher()
	{
		echo'<h1>Cône</h1>
    	<hr style="color:#fff" width=100%>';
		echo'<br><p>Le cone a un rayon de : ', $this->Rayon, '</p>';
		echo'<p>Le cone a une surface de : ', $this->Surface, '</p>';
		echo'<p>Le cone a un volume de : ', $this->Volume, '</p><br>';
	}

}

//-----------------------------------------//
//  CLASSE SPHERE
//-----------------------------------------//
class Sphere extends Cercle
{

	function __construct($Rayon)
	{
		$this->Rayon = $Rayon;
		$this->NomFigure = "Sphere";
		$this->CodeFigure = 1;
	}

	function Surface()
	{
		$this->Surface = $this->Rayon * $this->Rayon * pi();
	}

	function Volume()
	{
		$this->Volume = (4 * pi() * $this->Rayon * $this->Rayon * $this->Rayon) / 3;
	}

	function Afficher()
	{
		echo'<h1>Sphère</h1>
    	<hr style="color:#fff" width=100%>';
		echo'<br><p>La sphère a un rayon de : ', $this->Rayon, '</p>';
		echo'<p>La sphère a une surface de : ', $this->Surface, '</p>';
		echo'<p>La sphère a un volume de : ', $this->Volume, '</p><br>';
	}

}

//-----------------------------------------//
//  CLASSE PARALLELEPIPEDE
//-----------------------------------------//
class Parallelepipede extends Rectangle
{
	
	public $Hauteur;

	function __construct($Hauteur, $Largeur, $Longueur)
	{
		$this->Hauteur=$Hauteur;
		$this->Largeur=$Largeur;
		$this->Longueur=$Longueur;
		$this->NomFigure = "Parallelepipede";
		$this->CodeFigure = 1;
	}

	function Surface()
	{
		$this->Surface = $this->Largeur * $this->Longueur;
	}

	function Perimetre()
	{
		$this->Perimetre = ($this->Largeur * 2) + ($this->Longueur * 2);
	}

	function Volume()
	{
		$this->Volume = $this->Longueur * $this->Largeur * $this->Hauteur;
	}

	function Afficher()
	{
		echo'<h1>Parallélépipède</h1>
    	<hr style="color:#fff" width=100%>';
		echo'<br><p>Le parallelepipede a un périmètre de : ', $this->Perimetre, '</p>';
		echo'<p>Le parallelepipede a une surface de : ', $this->Surface, '</p>';
		echo'<p>La parallelepipede du rectangle a un volume de : ', $this->Volume, '</p><br>';
	}

}

?>