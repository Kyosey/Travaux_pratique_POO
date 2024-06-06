<!doctype html>
<html>
    <head>
        <title>Formulaire Géométrie | Alexis Chaignon</title>
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
            <form action="formulaire_geometrie_resultats.php" method="post">
                <table>
                    <!-- Légende du tableau -->
                    <caption><H1>Les figures de base</H1></caption>
                    <tr>
                        <!-- En-têtes du tableau -->
                        <th scope="col"><H1>Exemple</H1></th>
                        <th scope="col"><H1>Éléments</H1></th>
                    </tr>
                    <tr>
                        <!-- Deuxième ligne | Première colonne -->
                        <td class="titre" id="position"><H1>Triangle</H1></td>
    
                        <!-- Deuxième ligne | Deuxième colonne -->
                        <td scope="row"><p>Entrer la hauteur du triangle : </p><input type="number" name="Triangle_Hauteur" placeholder=""/><br>
                        <br><p>Entrer la longueur de la base du rectangle : </p><input type="number" name="Triangle_Base" placeholder=""/><br>
                        <br><p>Entrer la longueur du décalage par rapport à la base du rectangle : </p><input type="number" name="Triangle_DecalageBase" placeholder=""/></td>
                    </tr>
                    <tr>
                        <!-- Troisième ligne | Première colonne -->
                        <td class="titre" id="position"><H1>Cercle</H1></td>
    
                        <!-- Troisième ligne | Deuxième colonne -->
                        <td scope="row"><p>Entrer le rayon du cercle : </p><input type="number" name="Cercle_Rayon" placeholder=""/></td>
                    </tr>
                    <tr>
                        <!-- Quatrième ligne | Première colonne -->
                        <td class="titre" id="position"><H1>Rectangle</H1></td>
    
                        <!-- Quatrième ligne | Deuxième colonne -->
                        <td scope="row"><p>Entrer la largeur du rectangle : </p><input type="number" name="Rectangle_Largeur" placeholder=""/><br>
                        <br><p>Entrer la longueur du rectangle : </p><input type="number" name="Rectangle_Longueur" placeholder=""/></td>
                    </tr>
                    <tr>
                        <!-- Cinquième ligne | Première colonne -->
                        <td class="titre" id="position"><H1>FonctionX2</H1></td>
    
                        <!-- Cinquième ligne | Deuxième colonne -->
                        <td scope="row"><p>Entrer le coefficient directeur : </p><input type="number" name="A" placeholder=""/><br>
                        <br><p>Entrer une exponentiation : </p><input type="number" name="N" placeholder=""/><br>
                        <br><p>Entrer un décalage aux ordonnées : </p><input type="number" name="B" placeholder=""/></td>
                    </tr>
                    <tr>
                        <!-- Sixième ligne | Première colonne -->
                        <td class="titre" id="position"><H1>Cylindre</H1></td>
    
                        <!-- Sixième ligne | Deuxième colonne -->
                        <td scope="row"><p>Entrer la hauteur du cylindre : </p><input type="number" name="Cylindre_Hauteur" placeholder=""/><br>
                        <br><p>Entrer le rayon de la base du cylindre : </p><input type="number" name="Cylindre_Rayon" placeholder=""/></td>
                    </tr>
                    <tr>
                        <!-- Septième ligne | Première colonne -->
                        <td class="titre" id="position"><H1>Cône</H1></td>
    
                        <!-- Septième ligne | Deuxième colonne -->
                        <td scope="row"><p>Entrer la hauteur du cône : </p><input type="number" name="Cone_Hauteur" placeholder=""/><br>
                        <br><p>Entrer le rayon de la base du cône : </p><input type="number" name="Cone_Rayon" placeholder=""/></td>
                    </tr>
                    <tr>
                        <!-- Huitième ligne | Première colonne -->
                        <td class="titre" id="position"><H1>Sphère</H1></td>
    
                        <!-- Huitième ligne | Deuxième colonne -->
                        <td scope="row"><p>Entrer le rayon du cercle : </p><input type="number" name="Sphere_Rayon" placeholder=""/></td>
                    </tr>
                    <tr>
                        <!-- Neuvième ligne | Première colonne -->
                        <td class="titre" id="position"><H1>Parallélépipède</H1></td>
    
                        <!-- Neuvième ligne | Deuxième colonne -->
                        <td scope="row"><p>Entrer la hauteur du parallélépipède : </p><input type="number" name="Parallelepipede_Hauteur" placeholder=""/><br>
                        <br><p>Entrer la largeur du parallélépipède : </p><input type="number" name="Parallelepipede_Largeur" placeholder=""/><br>
                        <br><p>Entrer la longueur du parallélépipède : </p><input type="number" name="Parallelepipede_Longueur" placeholder=""/></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td id="position"><input type="submit" id="bouton" value="Calculer"></td>
                    </tr>
                </table>
            </form>
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
