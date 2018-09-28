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
                <div class="question">
                    <p>Comment s'écrit 11 ?</p>
                </div>
                <div class="reponse">
                    <a type="button" class="btn btnReponse">anse</a>
                    <a type="button" class="btn btnReponse">onze</a>
                    <a type="button" class="btn btnReponse">onz</a>
                    <a type="button" class="btn btnReponse">anze</a>
                </div>
                <input class="btn btn-primary" id="valider" name="valider" type="submit" value="Je valide ma réponde !" />
            </div>
        </form>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>