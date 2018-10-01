# WLM
School Quizz

* Créer la BBD en copiant **ecole.sql** et **SQL_Finale.sql** dans MySql
* Se connecter avec le login **3** et le mot de passe **123**
* Choissisez l'onglet **Mathématiques**
* Prenez le **Nombre en lettre**

(l'utilisation de chrome n'est pas recommandé)

## Soucci de connexion ?
Dans `service/connect.php` à la ligne 4 utilisez :
- sur mac `$base = new PDO("mysql:host=localhost:8889;dbname=ecolewlm","root","root");`
- sur windows `$base = new PDO("mysql:host=localhost;dbname=ecolewlm","root","");`
