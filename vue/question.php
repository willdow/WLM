<!DOCTYPE html>
<html>

<?php include '../head.php';?>

<body>
    <?php
include '../menu.php';
$id_questionnaire = $_GET['idTheme'];
$id_matiere = $_GET['idMatiere'];

$modele = new Modele($base);
$matiere = $modele->selectWhere("Nom", "matiere", "IdMatiere=" . $id_matiere);
$theme = $modele->selectWhere("Theme", "Questionnaire", "IdQuestionnaire=" . $id_questionnaire);

$questions = $modele->selectAllQuestion($id_questionnaire);
$nbQuestion = sizeof($questions);

?>
    <h1 class="titreQuestionnaire">
        <?php echo $theme[0]; ?>
    </h1>
    <?php

foreach ($questions as $val) {

    ?>
    <div class="container ">
        <div class="row questionnaire center">
            <form method="POST" action="./home.php">
                <div class="form-group">
                    <div class="question">
                        <h3 class="center">
                            <?php echo $val->getQuestion(); ?>
                        </h3>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="one_reponse custom-control custom-radio">
                                    <input type="radio" id="<?php echo $val->getRep1(); ?>" name="Question" class="custom-control-input">
                                    <label class="custom-control-label" for="<?php echo $val->getRep1(); ?>">
                                        <?php echo $val->getRep1(); ?></label>
                                </div>
                                <div class="one_reponse custom-control custom-radio">
                                    <input type="radio" id="<?php echo $val->getBonneRep(); ?>" name="Question" class="custom-control-input">
                                    <label class="custom-control-label" for="<?php echo $val->getBonneRep(); ?>">
                                        <?php echo $val->getBonneRep(); ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="one_reponse custom-control custom-radio">
                                    <input type="radio" id="<?php echo $val->getRep2(); ?>" name="Question" class="custom-control-input">
                                    <label class="custom-control-label" for="<?php echo $val->getRep2(); ?>">
                                        <?php echo $val->getRep2(); ?></label>
                                </div>
                                <div class="one_reponse custom-control custom-radio">
                                    <input type="radio" id="<?php echo $val->getRep3(); ?>" name="Question" class="custom-control-input">
                                    <label class="custom-control-label" for="<?php echo $val->getRep3(); ?>">
                                        <?php echo $val->getRep3(); ?></label>
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary validerReponse" id="valider" name="valider" type="submit" value="Je valide ma réponde !" />
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php
}

include '../footer.php';?>
</body>

</html>