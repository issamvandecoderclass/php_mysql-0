<DOCTYPE html>
<html>
    <head>
        <title>Lesbrief 6 opdracht 2</title>
    </head>

    <body>
        <?php
            $host = "localhost";
            $user = "issambuamran";
            $pass = "";
            $db = "bibliotheek";
            $port = 3306;

            $connection = mysqli_connect($host, $user, $pass, $db, $port);

            $query = "select * from boeken";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                print ("Boeknr:");
                print ($row['BOEKNR']);
                print (" Titel:");
                print ($row['TITEL']);
                print ("<br>");
            }
                mysqli_close($connection);
?>
    </body>
</html>
