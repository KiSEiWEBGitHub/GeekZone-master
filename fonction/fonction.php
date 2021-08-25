<?php 
    function csv(){

    $fichier=file_get_contents('./csv/info_boutique/alerbert.csv');
    echo($fichier);
    
    }

    function csv1(){
        $fichier=file_get_contents('./csv/info_boutique/annecy.csv');
        echo($fichier);
    }

    function csv2(){
        $fichier=file_get_contents('./csv/info_boutique/valence.csv');
        echo($fichier);
    }

    function csv3(){
        $fichier=file_get_contents('./csv/info_boutique/chambery.csv');
        echo($fichier);
    }

    function csv4(){
        $fichier=file_get_contents('./csv/info_boutique/grenoble.csv');
        echo($fichier);
    }

    function csv5(){
        $fichier=file_get_contents('./csv/info_boutique/clermon.csv');
        echo($fichier);
    }

    function csv6(){
        $fichier=file_get_contents('./csv/info_boutique/lyon.csv');
        echo($fichier);
    }


//-------------------------------------------------------------------------------------------//




    function insert(){
        $bdd = new PDO('mysql:host=localhost;dbname=geekzone', 'root', '');

        if(isset($_POST['b1'])){
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $mail = htmlspecialchars($_POST['mail']);
            $probleme = htmlspecialchars($_POST['story']);

            if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['story'])){
                $insertmbr = $bdd->prepare("INSERT INTO geek(prenom, nom, mail, probleme) VALUES(?, ?, ?, ?)");
                $insertmbr->execute(array($prenom, $nom, $mail, $probleme));
            }
            else{
                echo "err";
            }
        }
    }












?>