<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Samuel BICZO</title>
        <meta charset="utf-8">
        <meta name="description" content="Bienvenu sur mon site web, je suis développeur informatique et ceci est mon site web personnelles.">
        <meta name="keywords" content="biczo samuel, guerrier numérique, programmation, informatique, developpeur, curriculum vitae, cv">
        <meta name="robots" content="index, follow">


        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header>
            <div>
                <nav>
                    <ol>
                        <li class="mainNavigation">
                            <a class="mainNavigation" href="#">accueil</a>
                            <ol class="subMenuNavigation">
                                <li><a class="subMenu" href="#about">à propos</a></li>
                                <li><a class="subMenu" href="#skills">compétences</a></li>
                                <li><a class="subMenu" href="#projects">projets</a></li>
                                <li><a class="subMenu" href="#experiences">expériences</a></li>
                                <li><a class="subMenu" href="#contact">contact</a></li>
                            </ol>
                        </li>
                        <li class="mainNavigation"><a href="#">évenements</a></li>
                        <li class="mainNavigation"><a href="#">articles</a></li>
                    </ol>
                </nav>
            </div>
        </header>

        <section id="wallpaper">
            <div>
                <p><img src="ressources/images/guerrier.png" alt="photo de moi"></p>
                <h1>Samuel BICZO</h1>
                <button>me contacter</button>
                <br>
                <a class="workLink" target="_blank" href="https://github.com/GuerrierNumerique"><i class="fa fa-youtube"  aria-hidden="true"></i></a> 
                <a class="workLink" target="_blank" href="https://github.com/GuerrierNumerique"><i class="fa fa-github" aria-hidden="true"></i></a>
            </div>
        </section>

        <section id="about">
            <div class="container"> 
                <div class="itemA">
                    <h2>à propos</h2>
                    <p>
                        Système Numérique Informatique et Réseau, sont les maitres mots 
                        de ma formation, en effet, l'informatique est présents partouts,
                        dans chaque système numérique. Et c'est système doivent parfois
                        communiquez ensemble d'ou la partis réseaux. Ma formation 
                        m'apporte les connaissance nécessaire pour ce qu'on apelles 
                        l'internet des objets.Je suis capable de développez des logiciel/programme,
                        pour vos besoin nécessaires.
                    </p>
                </div>

                <div class="itemB">
                    <h2>information de base</h2>
                        
                    <table> 
                        <tr>
                            <td class="fields"><i class="fa fa-user"  aria-hidden="true"></i> âge :</td>
                            <td  class="value">18</td>
                        </tr>

                        <tr>
                            <td class="fields"><i class="fa fa-envelope"  aria-hidden="true"></i> email :</td>
                             
                            <td  class="value">samuelbiczopro@gmail.com</td>
                        </tr>

                        <tr> 
                            <td class="fields"><i class="fa fa-flag"  aria-hidden="true"></i> langues :</td>
                            <td class="value">Francais, Anglais, Allemand</td>
                        </tr>
                    </table>
                </div>

                <div  class="itemC">
                    <h2 class="clearFloating">liens utiles</h2>

                    <table class="clearFloating tableURL">
                        <tr>
                            <td class="fields">github :</td>
                            <td  class="value"><a href="https://github.com/GuerrierNumerique">https://github.com/GuerrierNumerique</a></td>
                        </tr>

                        <tr>
                            <td class="fields">root-me :</td>
                            <td  class="value"><a href="https://www.root-me.org/GuerrierNumerique?lang=fr#5b6f42ece5f157e679017a659a0c192d">https://www.root-me.org/GuerrierNumerique</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <section id="skills">
            <h2>compétences professionnelles</h2>
            <h3>langages</h3>

            <table>
                <tr>
                    <td class="language_c">c <span>95%</span></td>
                    <td class="language_html">html <span>90%</span></td>
                </tr>
                <tr>
                    <td class="language_cpp">c++ <span>78%</span></td>
                    <td class="language_css">css <span>65%</span></td>
                </tr>
                <tr>
                    <td class="language_python">python <span>50%</span></td>
                    <td class="language_php">php <span>71%</span></td>
                </tr>
 
            </table>
        </section>

        <section id="projects">
            <h2>En cours <i class="fa fa-spinner fa-spin" style="font-size:24px"></i></h2>
        </section>

        <section id="experiences">
            <h2>En cours... <i class="fa fa-spinner fa-spin" style="font-size:24px"></i></h2>
        </section>


        <section id="contact">            
            <form action="sendmail.php" method="post">
                <h2>Informations de contact</h2>
                <i class="fa fa-user-circle"></i>
                <table> 
                    <tr>
                        <td><span>Me contacter</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Prenom Nom" name="userFirstNameLastName"></td>
                    </tr>
                   
                    <tr>
                        <td>
                            <input type="text" placeholder="Sujet" name="userSubject"></td>
                        </tr>

                    <tr>
                        <td>
                            <input type="text" placeholder="E-mail" name="userEmail">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <textarea placeholder="Message" name="userMessage"></textarea>
                        </td>
                    </tr>
                     
                    <tr>
                        <td>
                            <input type="submit" value="Envoyer"></td>
                        </td>    
                        <td>
                            <i class="material-icons ico_send">send</i>
                        </td>
                    </tr>
                
                 </table>
             </form>
         </section>


        <footer id="footer">
                <h3>Samuel BICZO</h3>
                <p>© Samuel BICZO. </p>
        </footer>
    </body>
</html>