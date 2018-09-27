<!DOCTYPE html>
<html>

<?php include('../head.php'); ?>

<body>
    <?php include('../menu.php'); ?>
    <div class="container ">
        <div class="row questionnaire welcome">
        <form method="POST" action="./home.php">
            <h1 class="titreQuestionnaire">Quizz 1 : Addition</h1>
            <div class="form-group">
                Ton ID : <input class="form-control" type="text" name="id" id="id" /><br />
                Ton Mot de passe : <input class="form-control" type="text" name="prenom" id="prenom" />
                <p id="erreurPrenom"></p><br />
                <input class="btn btn-primary" id="valider" name="valider" type="submit" value="Se connecter" />
            </div>
        </form>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>