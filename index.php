<?php
include_once 'tools/function.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Mon Portfolio</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#project">Projet</a></li>
                <li><a href="#skillz">Skills</a></li>
                <li><a href="#footer">contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="project">
        <div id="container-title">
            <h1 id="title">Bonjour je suis Mathieu Ruellet</h1>
            <h4 id="sub">découvrez mes projets et connaissance</h4>
        </div>
        <details open id="de-pro">
            <summary>Projet</summary>
            <form action="./php/check.php" method="post">

                <?php
                echo "<input type='submit' name='{$enrProjet['thales']}' value='Thales'>";
                echo "<input type='submit' name='{$enrProjet['reseau']}' value='réseaux'>";
                echo "<input type='submit' name='{$enrProjet['signau']}' value='signaux'>";

                ?>
            </form>
        </details>

    </section>
    <section id="skillz">
        <div id="container-skillz">
            <div id="php">
                <img class="size" src="assets/pictures/phpxmysql.png" alt="php">
                <details open>
                    <summary>PHP</summary>
                    <p>J'ai commencé à apprendre ces languages durant mon année de terminale,
                        celà m'a permit de réaliser un projet de fin d'année.
                        Je me suis améliorer par des projets avec un amis,
                        en confectionnant des sites web avec plusieurs centaines de visiteur.
                        J'ai pu ensuite améliorer d'avantage mes connaissances dans ces
                        languages avec le projet Thalès Alenia Space.
                    </p>
                </details>
            </div>
            <div id="python">
                <img class="size" src="assets/pictures/python.svg" alt="python">
                <details open>
                    <summary>Python</summary>
                    <p>
                        J'ai commencé le à coder en Python en début terminale,
                        en autodidacte, avec des vidéos Youtube(Graven),
                        des docs et des forums. J'ai fais quelque petit projet,
                        qui m'on appris et m'on fait avancé dans mon apprentissage.
                        J'ai pu m'améliorer grandement durant ma première année en
                        BUT Réseaux & Télécommunication.
                    </p>
                </details>
            </div>
            <div id="C">
                <img class="size" src="assets/pictures/cpp_logo.png" alt="C program">
                <details open>
                    <summary>C / C++</summary>
                    <p>
                        J'ai commencé à apprendre le C en terminale, en parallèle avec le python,
                        de façon autodidacte avec des livres, docs et vidéos.
                        Je voulais apprendre un language de bas niveau et aussi plus complexe et rigoureux.
                        Après avoir appris les bases du C je voulais aussi testé un language objet,
                        je me suis donc tourné vers le C++, qui est le grand frère du C.
                        Et j'ai pu réaliser un petit projet.
                        J'ai aussi pu perfectionner mes bases en première année de R&T
                    </p>
                </details>
            </div>
            <div id="linux">
                <img class="size" src="assets/pictures/linux.png" alt="Linux">
                <details open>
                    <summary>Linux</summary>
                    <p>
                        J'ai appris énormément durant ma première année de R&T et j'en apprend encore aujourd'hui.
                        On nous a appris a mettre en place des systèmes téléphonique qui nous permettais de
                        téléphoner entre binôme. On aussi appris a mettre en place des serveurs Web (http, https).
                        On nous a aussi appris comment marché docker et de l'utiliser sur linux.
                        En gros on a appris a configurer des hôtes avec certains services et aussi des serveurs (DNS, DHCP, SSH).

                    </p>
                </details>
            </div>
            <div id="cisco">
                <img class="size" src="assets/pictures/cisco.svg" alt="cisco">
                <details open>
                    <summary>Cisco</summary>
                    <p>
                        Cisco a été une découverte pour moi et en apprend encore.
                        Durant ma première année de R&T j'ai appris a configurer des routeurs en IPv4/IPv6
                        ainsi que des switch de niveau 2 et 3. J'ai aussi appris a mettre en place des VLAN, WAN.
                        Le NAT (SNAT, DNAT, NAT masquerading, PORT forwading ...),
                        mettre en place des tunnels entre un deux réseau IPv6 et IPv4.
                        j'ai aussi appris a mettre en place un firewall avec des ACL et ACL étendu.
                        Et pour finir on nous a appris a faire du subnetting.
                    </p>
                </details>
            </div>
            <div id="HTML">
                <img class="size" src="assets/pictures/html-css.png" alt="html 5 & CSS 3">
                <details open>
                    <summary>HTML / CSS</summary>
                    <p>
                        J'ai commencé a apprendre le HTML et le CSS en seconde.
                        J'ai améliorer mes compétences et mes connaissances dans
                        c'est 2 languages de programmation pendant mon année de première et
                        je continue encore aujourd'hui a m'améliorer dans c'est 2 languages.
                    </p>
                </details>
            </div>
        </div>

    </section>

    <footer id="footer">
        <div id="top">
            <a href="./assets/CV.pdf" download="cv_Ruellet-">TÉLÉCHARGEZ MON CV</a>
        </div>
        <div id="container-footer">
            <div id="left">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#project">Projet</a></li>
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">contact</a></li>
                    <p id="copyright">Created by Exarven | all copyright reserved to Exarven</p>
                </ul>
            </div>
            <div id="center">
                <form action="tools/function.php" method="post">
                    <label for="name">Votre Nom</label>
                    <input type="text" name="name" id="name">
                    <label for="email">Votre Email</label>
                    <input type="email" name="email" id="email">
                    <label for="sujet">Sujet</label>
                    <input type="text" name="sujet" id="sujet">
                    <label for="texte">Votre Message</label>
                    <textarea name="texte" id="texte" cols="30" rows="10"></textarea>
                    <input type="submit" value="ENVOI">
                </form>
            </div>
            <div id="right">
                <a href="https://github.com/Exarven15"><img src="assets/pictures/logo-github.png" alt="github"></a>
                <a href=""><img src="assets/pictures/linkedin-logo.png" alt="linkedin"></a>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>