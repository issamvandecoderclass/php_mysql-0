<DOCTYPE html>
<html>
    <head>
        <title>Invoer boek</title>
    </head>
    <body>
        <?php
            $host = "localhost";
            $user = "issambuamran";
            $pass = "";
            $db = "bibliotheek";
            $port = 3306;

            $connection = mysqli_connect($host, $user, $pass, $db, $port);

            $boekid = $_POST["boekid"];
            $autnr = $_POST["auteurnr"];
            $titel = $_POST["boektitel"];
            $genre = $_POST["genre"];
            $aantal = $_POST["aantal"];
            $rubriek = $_POST["rubriek"];
            $pubjaar = $_POST["pubjaar"];

            $sql = "INSERT INTO boeken(BOEKNR, AUTNR, TITEL, PUB_JAAR, AANTALPAGS, GENRE, RUBRIEK) VALUES ($boekid, $autnr, '$titel', $pubjaar, '$genre', $aantal, '$rubriek')";
            $resultaat = mysqli_query($connection, $sql);

            $verbreken = mysqli_close($connection);

            print ("Het boek $titel is opgeslagen");
        ?>
    </body>
</html>
