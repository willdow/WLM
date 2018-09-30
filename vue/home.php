<!DOCTYPE html>
<html>

<?php

    include('../head.php');
    session_start();
?>

<body>
    <?php
        if (isset($_POST['valider'])){

            $id = $_POST['id'];
            $mdp = $_POST['mdp'];
            $controleur = new Controleur();

            $controleur->connexion($id,$mdp,$base);
        }
    include('../menu.php');
    ?>
    <div class="container ">
        <div class="row">
            <div class="col-8">
                <p class="welcome">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt
                    mollit anim id est laborum</p>
            </div>
            <div class="col-4 center separate">
                <img src="../img/child.svg" alt="selfie" class="childPhoto">
                <p>Nom Prenom</p>
                <div class="last lastQuiz">
                    <p>Mes derniers quizz</p>
                    <div class="detailLast">
                        <p>Matière - Numéro Quizz</p>
                        <p>Matière - Numéro Quizz</p>
                        <p>Matière - Numéro Quizz</p>
                    </div>
                </div>
                <div class="last lastNote">
                    <p>Mes derniers notes</p>
                    <div class="detailLast">
                        <p>Matière - Numéro Note</p>
                        <p>Matière - Numéro Note</p>
                        <p>Matière - Numéro Note</p>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <?php include('../footer.php'); ?>
</body>

</html>


<?php
$_SESSION['id'] = 1;

if ($_SESSION['id'] <> "")
{
    if (isset($_GET['page']))
    {
        echo "aa";
        $page = $_GET['page'];
    }
    else
    {
        $page = "NAN";
    }


    switch ($page) {
        case "accueil":
            header('Location: home.php');
            break;

        case "math":

            //$matiere = "math";
            header('Location: choix.php?idMatiere=2');
            break;

        case "francais":
            header('Location: choix.php?idMatiere=1');
            break;

        case "anglais":
            header('Location: choix.php?idMatiere=3');
            break;
    }
}



?>