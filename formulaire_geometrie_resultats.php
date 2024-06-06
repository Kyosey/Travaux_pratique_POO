<!doctype html>
<html>
    <head>
        <title>Résultats Géométrie | Alexis Chaignon</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section>
            <img src="img/stars.png" id="stars">
            <img src="img/moon.png" id="moon">
            <img src="img/mountains_behind.png" id="mountains_behind">
            <h2 id="text">TP Objet</h2>
            <a href="#sec" id="btn">Explorer</a>
            <img src="img/mountains_front.png" id="mountains_front">
        </section>
        <div class="sec" id="sec">
            <h2>Cas Géométrie</h2>
            <!-- On appelle la page classe_geometrie.php -->
            <?php require_once('traitement/constructeur_geometrie.php'); ?>
            <table>
                <!-- Légende du tableau -->
                <caption><H1>Les figures de base</H1></caption>
                <tr>
                    <!-- En-têtes du tableau -->
                    <th scope="col"><H1>Type de figure</H1></th>
                    <th scope="col"><H1>Résultats</H1></th>
                </tr>
                <tr>
                    <!-- Deuxième ligne | Première colonne -->
                    <td class="titre" id="position">
                    <H1>Triangle</H1>
                    </td>

                    <!-- Deuxième ligne | Deuxième colonne -->
                    <td scope="row">
                    <?php     
                    //-----------------------------------------//
                    //  CREATION TRIANGLE
                    //-----------------------------------------//
                    $triangle = new triangle($Triangle_Hauteur, $Triangle_Base, $Triangle_DecalageBase);
                    $triangle->LongCote();
                    $triangle->Surface();
                    $triangle->Perimetre();
                    $triangle->Afficher();
                    ?>
                    </td>
                </tr>
                <tr>
                    <!-- Troisième ligne | Première colonne -->
                    <td class="titre" id="position">
                        <H1>Cercle</H1>
                    </td>

                    <!-- Troisième ligne | Deuxième colonne -->
                    <td scope="row">
                    <?php     
                    //-----------------------------------------//
                    //  CREATION CERCLE
                    //-----------------------------------------//    
                    $cercle = new cercle($Cercle_Rayon);
                    $cercle->Surface();
                    $cercle->Perimetre();
                    $cercle->Afficher();
                    ?>                        
                    </td>
                </tr>
                <tr>
                    <!-- Quatrième ligne | Première colonne -->
                    <td class="titre" id="position">
                    <H1>Rectangle</H1>
                    </td>

                    <!-- Quatrième ligne | Deuxième colonne -->
                    <td scope="row">
                    <?php     
                    //-----------------------------------------//
                    //  CREATION RECTANGLE
                    //-----------------------------------------//    
                    $rectangle = new rectangle($Rectangle_Largeur,  $Rectangle_Longueur);
                    $rectangle->Surface();
                    $rectangle->Perimetre();
                    $rectangle->Diagonale();
                    $rectangle->Afficher();
                    ?>       
                    </td>
                </tr>
                <tr>
                    <!-- Cinquième ligne | Première colonne -->
                    <td class="titre" id="position">
                    <H1>FonctionX2</H1>
                    </td>

                    <!-- Cinquième ligne | Deuxième colonne -->
                    <td scope="row">
                    <?php     
                    //-----------------------------------------//
                    //  CREATION FONCTIONX2
                    //-----------------------------------------//    
                    $fonctionx2 = new FonctionX2($A, $N, $B);
                    $fonctionx2->Aire(1, 2);
                    $fonctionx2->Afficher();
                    ?>                       
                    </td>
                </tr>
                <tr>
                    <!-- Sixième ligne | Première colonne -->
                    <td class="titre" id="position">
                    <H1>Cylindre</H1>
                    </td>

                    <!-- Sixième ligne | Deuxième colonne -->
                    <td scope="row">
                    <?php     
                    //-----------------------------------------//
                    //  CREATION CYLINDRE
                    //-----------------------------------------//    
                    $cylindre = new cylindre($Cylindre_Hauteur, $Cylindre_Rayon);
                    $cylindre->Surface();
                    $cylindre->Volume();
                    $cylindre->Afficher();
                    ?>
                    </td>
                </tr>
                <tr>
                    <!-- Septième ligne | Première colonne -->
                    <td class="titre" id="position">
                    <H1>Cône</H1>
                    </td>

                    <!-- Septième ligne | Deuxième colonne -->
                    <td scope="row">
                    <?php     
                    //-----------------------------------------//
                    //  CREATION CONE
                    //-----------------------------------------//    
                    $cone = new cone($Cone_Hauteur, $Cone_Rayon);
                    $cone->Surface();
                    $cone->Volume();
                    $cone->Afficher();
                    ?>                           
                    </td>
                </tr>
                <tr>
                    <!-- Huitième ligne | Première colonne -->
                    <td class="titre" id="position">
                    <H1>Sphère</H1>
                    </td>

                    <!-- Huitième ligne | Deuxième colonne -->
                    <td scope="row">
                    <?php     
                    //-----------------------------------------//
                    //  CREATION SPHERE
                    //-----------------------------------------//    
                    $sphere = new sphere($Sphere_Rayon);
                    $sphere->Surface();
                    $sphere->Volume();
                    $sphere->Afficher();
                    ?>                       
                    </td>
                </tr>
                <tr>
                    <!-- Neuvième ligne | Première colonne -->
                    <td class="titre" id="position">
                    <H1>Parallélépipède</H1>
                    </td>

                    <!-- Neuvième ligne | Deuxième colonne -->
                    <td scope="row">
                    <?php     
                    //-----------------------------------------//
                    //  CREATION PARALLELEPIPEDE
                    //-----------------------------------------//    
                    $parallelepipede = new parallelepipede($Parallelepipede_Hauteur, $Parallelepipede_Largeur, $Parallelepipede_Longueur);
                    $parallelepipede->Perimetre();
                    $parallelepipede->Surface();
                    $parallelepipede->Volume();
                    $parallelepipede->Afficher();
                    ?>                       
                    </td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td id="position"><input type="button" id="bouton" value="Retour" onclick="history.back()"></td>
                </tr>
            </table>
        </div>

        <script>
            let stars = document.getElementById('stars');
            let moon = document.getElementById('moon');
            let mountains_behind = document.getElementById('mountains_behind');
            let text = document.getElementById('text');
            let btn = document.getElementById('btn');
            let mountains_front = document.getElementById('mountains_front');
            let header = document.querySelector('header');

            window.addEventListener('scroll',function(){
                let value = window.scrollY;
                stars.style.left = value * 0.25 + 'px';
                moon.style.top = value * 1.05 + 'px';
                mountains_behind.style.top = value * 0.5 + 'px';
                mountains_front.style.top = value * 0 + 'px';
                text.style.marginRight = value * 4 + 'px';
                text.style.marginTop = value * 1.0 + 'px';
                btn.style.marginTop = value * 1.5 + 'px';
                header.style.top = value * 0.5 + 'px';
            })
        </script>
    </body>
</html>
