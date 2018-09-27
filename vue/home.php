<!DOCTYPE html>
<html>

<?php include('../head.php'); ?>

<body>
    <?php
        include('menu.php');
        if (isset($_POST['valider'])){

            $id = $_POST['id'];

          /*  $controleur = new Controleur();

            $controleur->connexion($id);*/


        }
    ?>
    <div class="container ">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum</p>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>