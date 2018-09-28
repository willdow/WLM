<!DOCTYPE html>
<html>

<?php include('../head.php'); ?>

<body>
    <?php include('../menu.php'); ?>
    <div class="container ">
    <h3 class="titreQuestionnaire">Quizz 1 : Addition</h3>
        <div class="row questionnaire center">
            <form method="POST" action="./home.php">
                
                <div class="form-group">
                    <div class="question">
                        <h1>Comment s'écrit 11 ?</h1>
                    </div>
                    <div class="reponse">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <a type="button" class="btn btnReponse">anse</a>
                                    <a type="button" class="btn btnReponse">onze</a>
                                </div>
                                <div class="col-12">
                                    <a type="button" class="btn btnReponse">onz</a>
                                    <a type="button" class="btn btnReponse">anze</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary" id="valider" name="valider" type="submit" value="Je valide ma réponde !" />
                </div>
            </form>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>