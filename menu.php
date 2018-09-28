

<nav id="menu">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" href="home.php?page=accueil">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" href="home.php?page=math">Mathematiques</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" href="home.php?page=francais">Francais</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" href="home.php?page=anglais">Anglais</a>
        </li>
        <?php
        if (isset($_SESSION['type']) == "Prof")
        {
            echo "<a class=\"nav-link\" id=\"profile-tab\" href=\"home.php?page=gestion\"><li>Gestion</li></a>";
            echo "<a class=\"nav-link\" id=\"profile-tab\" href=\"home.php?page=notes\"><li>Notes</li></a>";
        }
        ?>

        <!--                    <a href="index.php?page=contact"><li>Contact</li></a>-->
    </ul>
</nav>


