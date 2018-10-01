<!DOCTYPE html>
<html>

<?php include('../head.php'); ?>

<body>
    <?php
        include('../menu.php');

    $nbQuestion = $_POST['nbQuestion'];
    ?>
    <form action="ajout_questionnaire_2.php" method="POST">
        </br></br>
        <h1>Création des questions </h1>
        </br></br>
    <?php
    for ($i =1;$i<=$nbQuestion;$i++)
    {
        ?>

        <div class="card block_question">
            <div class="form-group">
                <label for="question">Question <?php  echo $i; ?> : </label>
                <input type="text" class="form-control" id="question" name="question<?php  echo $i; ?>">
            </div>
            <div class="form-group">
                <label for="bonneRep">Bonne reponse : </label>
                <input type="text" class="form-control" name="bonneRep<?php  echo $i; ?>" id="bonneRep">
            </div>
            <div class="form-group">
                <label for="rep1">Reponse 1 : </label>
                <input type="text" class="form-control" name="rep1_<?php  echo $i; ?>" id="rep1">
            </div>
            <div class="form-group">
                <label for="rep2">Reponse 2 : </label>
                <input type="text" class="form-control" name="rep2_<?php  echo $i; ?>" id="rep2">
            </div>
            <div class="form-group">
                <label for="rep3">Reponse 3 : </label>
                <input type="text" class="form-control" name="rep3_<?php  echo $i; ?>" id="rep3">
            </div>
        </div></br></br>

        <?php
    }

    ?>

        <button type="submit" name="ajoutQuizz" class="btn btn-primary">Creer</button>
    </form>
    <?php

    include('../footer.php');
    ?>
</body>

</html>
