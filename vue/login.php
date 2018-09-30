<!DOCTYPE html>
<html>

<?php
    include('../head.php');
    session_start();
?>
<body>
    <div class="container contenu">
        <img class="logo" src="../img/logo.png" alt="logo de WLM">
        <form method="POST" action="./home.php">
            <h1>Connexion</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                Ton ID : <input class="form-control" type="text" name="id" id="id" required /><br />
                <i class="fas fa-unlock-alt"></i>
<<<<<<< HEAD
                Ton Mot de passe : <input class="form-control" type="password" name="prenom" id="prenom" required/>
=======
                Ton Mot de passe : <input class="form-control" type="text" name="mdp" id="mdp" />
>>>>>>> e156da6f7b8a8032665d8b1057ccc9c1090cba46
                <p id="erreurPrenom"></p><br />
                <input class="btn btn-primary" id="valider" name="valider" type="submit" value="Se connecter" />
            </div>
        </form>
        <img class="book" src="./../img/book.svg" alt="image de livre">
        <img class="book2" src="./../img/book2.svg" alt="image de livre">
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>