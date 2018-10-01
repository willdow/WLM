<!DOCTYPE html>
<html>

<?php
    include('../head.php');
    include('../menu.php');
echo $_SESSION['TypeP'];
?>

<body>

<div class="container ">
    <div class="row choix">

    <?php


        $idMatiere = $_GET['idMatiere'];
        $modele = new Modele($base);
        $themes = $modele->selectAllTheme($idMatiere);

        foreach ($themes AS $val)
        {

            //$theme_actuel = $val->getTheme();
            //$theme_id = $val->getIdQuestionnaire();
            ?>
                <a href="question.php?idMatiere=<?php echo $idMatiere; ?>&&idTheme=<?php echo $val->getIdQuestionnaire(); ?>" type="button" class="btn btn-primary btn-lg"><?php echo $val->getTheme(); ?></a>
            <?php
        }

    ?>

    </div>
</div>

<!--            <a type="button" class="btn btn-primary btn-lg" href="./addition.php">Quizz 1 : Addition</a>-->
<!--            <a type="button" class="btn btn-primary btn-lg">Quizz 2 : Soustraction</a>-->
<!--            <a type="button" class="btn btn-primary btn-lg">Quizz 3 : Multiplication</a>-->
<!--            <a type="button" class="btn btn-primary btn-lg">Quizz 4 : Division</a>-->
<!--            <a type="button" class="btn btn-primary btn-lg">Quizz 5 : Théorème</a>-->
<!--            <a type="button" class="btn btn-primary btn-lg">Quizz 6 : Cours</a>-->

    <?php include('../footer.php'); ?>
</body>

</html>