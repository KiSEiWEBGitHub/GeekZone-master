<html>
    <head>
    <meta charset="utf-8">
        <title>GeekZone</title>
        <link rel="stylesheet" type="text/css" media="screen" href="new2.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="./css/boutique.css">
    </head>
    <body>
        <?php include './inc/menu_index.inc.php' ?>
        <br><br><br><br>
        <?php include './fonction/fonction.php' ?>
        <center>
            <table>
                <td>
                    <div class="box_1">
                        <h1 class="titre">Boutique Albertville</h1>
                        <img class="img" src="./img/img_boutique/1.jpg">
                        <p class="texte">
                            <?php csv() ; ?>
                        </p>
                    </div>

                    <div class="box_2">
                        <h1 class="titre">Boutique Annecy</h1>
                        <img class="img" src="./img/img_boutique/2.jpg">
                        <p class="texte">
                             <?php csv1() ; ?>
                        </p>
                    </div>

                    <div class="box_3">
                        <h1 class="titre">Boutique Grenoble</h1>
                        <img class="img" src="./img/img_boutique/3.jpg">
                            <p class="texte">
                            <?php csv4() ; ?>
                        </p>
                    </div>

                    <div class="box_4">
                        <h1 class="titre">Boutique Chambery</h1>
                        <img class="img" src="./img/img_boutique/4.jpeg">
                        <p class="texte">
                            <?php csv3() ; ?>
                        </p>
                    </div>

                    <div class="box_3">
                        <h1 class="titre">Boutique Clermont</h1>
                        <img class="img" src="./img/img_boutique/5.jpg">
                        <p class="texte">
                            <?php csv5() ; ?> 
                        </p>
                    </div>

                    <div class="box_4">
                        <h1 class="titre">Boutique Valence</h1>
                        <img class="img" src="./img/img_boutique/6.jpg">
                        <p class="texte">
                            <?php csv2() ; ?>
                        </p>
                    </div>

                    <div class="box_3">
                        <h1 class="titre">Boutique Lyon</h1>
                        <img class="img" src="./img/img_boutique/7.jpg">
                        <p class="texte">
                             <?php csv6() ; ?> 
                        </p>
                    </div>
                </td>
            </table>
        </center>
    </body>
</html>