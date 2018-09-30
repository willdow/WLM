<!DOCTYPE html>
<html>

<?php include('../head.php'); ?>

<body>
    <?php include('../menu.php'); ?>
    <form action="ajout_questionnaire_2.php" method="POST">
        <div class="form-group">
            <label for="Theme">Theme</label>
            <input type="text" class="form-control" name="theme" id="theme">
        </div>
        <div class="form-group">
            <label for="nbQuestion">Nombre de questions</label>
            <input type="number" min="1" max="10" class="form-control" name="nbQuestion" id="nbQuestion">
        </div>
        <button type="submit" class="btn btn-primary">Creer</button>
    </form>
    <?php include('../footer.php'); ?>
</body>

</html>