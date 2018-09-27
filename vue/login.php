<!DOCTYPE html>
<html>

<?php include('../head.php'); ?>

<body>
    <div class="container contenu">
        <img class="logo" src="../img/logo.png" alt="logo de WLM">
        <form method="POST" action="./home.php">
            <h1>Connexion</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                Ton ID : <input class="form-control" type="text" name="nom" id="nom" /><br />
                <i class="fas fa-unlock-alt"></i>
                Ton Mot de passe : <input class="form-control" type="text" name="prenom" id="prenom" />
                <p id="erreurPrenom"></p><br />
                <input class="btn btn-primary" id="valider" type="submit" value="Se connecter" />
            </div>
        </form>
        <img class="book" src="./../img/book.svg" alt="image de livre">
        <img class="book2" src="./../img/book2.svg" alt="image de livre">
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>