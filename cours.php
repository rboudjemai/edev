<?php
    include("Nav.html");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cours.css">
    <title>e-Dev | Cours</title>
</head>
<body>
    <main class="main_property">
        <h1>Introduction au HTML/CSS</h1>

        <article>
            <p>
                Un site internet est composé de nombreux fichiers : <em>contenu textuel</em>, <em>code</em>, <em>feuilles de styles CSS</em>, <em>contenus média</em>, etc. <br> 
                Lors de la construction d'un site web, ces différents fichiers doivent être <strong>organisés</strong> et rangés sur votre ordinateur afin qu'ils puissent interagir les uns avec les autres et que le contenu s'affiche correctement. 
            </p>
        </article>

        <article class="box">
            <h2>Il existe beaucoup de langages de programmation différents.</h2>
            <section class="tableau">
                <p>
                    --> <span class="important">HTML</span>, <span class="important">CSS</span> ou <span class="important">Java</span> par exemple, sont des <strong>langages statiques</strong>, avec lesquels, <span class="bleu">l’information et le design affichés seront les mêmes, disponibles pour tout le monde, tout le temps.</span>
                    <br> <br>
                </p>
                <p>
                    --> D’un autre coté, <span class="important">Javascript</span>, <span class="important">PHP</span>, <span class="important">Perl</span>, <span class="important">Python</span>, ou encore <span class="important">Ruby</span> sont des <strong>langages dynamiques</strong>, qui vont <span class="bleu">se mettre à jour automatiquement</span> : on dit qu’ils exécutent au moment de l’exécution, des actions que d’autres langages ne peuvent exécuter que durant la compilation. <br> 
                </p>
            </section>

            <section class="note">
                <p>Les langages dynamiques permettent, à partir d’un même code source, d’afficher une page différente en fonction du contexte utilisateur, comme par exemple la page « Mon Compte » d’un site web.</p>
            </section>

        </article>

        <article>
            <p>
                Ce cours ne s’intéressera qu’aux bases de l’HTML et du CSS.  
                <br> <br>

                Le <span class="important">HTML (Hyper Text Markup Language)</span> est le langage conçu pour <span class="bleu">représenter les pages web</span>. Il est inventé par <em>Tim Berners-Lee</em> en 1991. <br>

                Les <span class="important">CSS (Cascading Style Sheets en anglais, ou « feuilles de style en cascade »)</span> forment le langage informatique utilisé pour <span class="bleu">mettre en forme une page web.</span> <br> <br>


                HTML est un <strong>langage de balises</strong> : il se compose d’une série d’éléments entourant du contenu afin de le faire apparaitre et le structurer selon un certain choix. Aujourd’hui, la version la plus utilisée est l’HTML 5. <br> <br>

                La première déclaration de votre document HTML doit être <strong>le doctype</strong>. C’est une instruction qui renseigne le navigateur sur la version dans laquelle la page HTML est écrite. En HTML5, l’instruction s’écrit ainsi : <span class="balise">&lt;!DOCTYPE html&gt</span> et se place avant la structure de base du code de cette façon. <br>
            </p>

            <div class="img_exemple">
                <img src="Img/ex_code.png" alt="Structure basique de code">
            </div>

            <p>Cet exemple illustre la <strong>structure de base</strong> utilisée pour la construction d’une page web :</p>
            <ul>
                <li>L’ensemble de la page web se situe entre la balise <span class="balise">&lt;html&gt</span> et <span class="balise">&lt;/html&gt</span></li>
                <li><span class="balise">&lt;head&gt &lt;/head&gt</span> contient les informations sur le document</li>
                <li>Et <span class="balise">&lt;body&gt &lt;/body&gt</span> contient le corps du document</li>
            </ul>


            <p>La <span class="important">balise head</span> peut notamment contenir :</p>
            <ul>
                <li><span class="balise">&lt;title&gt</span> contient le titre de la page</li>
                <li><span class="balise">&lt;style&gt</span> Sert à faire du style CSS mais il est plutôt conseillé d’inclure le style dans un fichier .CSS à part</li>
                <li><span class="balise">&lt;link&gt</span> lien vers des ressources externes: c’est avec cette balise qu’on lie le fichier html </li>
                <li><span class="balise">&lt;meta&gt</span> des metadata telles que l’encodage, l’auteur, les mots clés… <br>
                </li>
            </ul>


            <p>Et la <span class="important">balise body</span> contient le <strong>contenu de la page</strong> ainsi que toutes les balises permettant de structurer la page :</p>
            <ul>
                <li>les titres (<span class="balise">&lt;h1&gt</span> … <span class="balise">&lt;h6&gt</span>)</li>
                <li>des divisions (<span class="balise">&lt;article&gt</span>, <span class="balise">&lt;section&gt</span>, <span class="balise">&lt;div&gt</span>)</li>
                <li>ou encore des balises (<span class="balise">&lt;span&gt</span>, <span class="balise">&lt;ul&gt</span>, <span class="balise">&lt;li&gt</span>, <span class="balise">&lt;table&gt</span>…)</li>
            </ul>
            </p>

            <div class="emplacement_boutons">
                <a href="https://developer.mozilla.org/fr/docs/Apprendre/Commencer_avec_le_web/Les_bases_HTML" onclick="window.open(this.href); return false;">
                    <div class="bouton_lien_cours">
                        <p>Cliquez ici pour débuter l’HTML</p>
                        <img src="Img/HTML5_cours.png" alt="Lien d'un cours HTML" class="lien_cours">
                    </div>
                </a>

                <a href="https://developer.mozilla.org/fr/docs/Apprendre/Commencer_avec_le_web/Les_bases_CSS" onclick="window.open(this.href); return false;">
                    <div class="bouton_lien_cours">
                        <p>Cliquez ici pour débuter le CSS</p>
                        <img src="Img/CSS_cours.png" alt="Lien d'un cours CSS" class="lien_cours">
                    </div>
                </a>               
            </div>

        </article>
        
        <a href="index.php" class="bouton_bleu right">Accueil</a>      
        
    </main>
</body>
</html>