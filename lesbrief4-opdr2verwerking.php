<DOCTYPE html>
<html>
    <head>
        <title>Lesbrief 4 opdracht 2</title>
    </head>
    <body>
        <?php
            $keuze = $_POST[“keuze”];

            print("je antwoord was" + $keuze)
            if ($keuze == "Berlijn") {
                print(“$keuze is goed);
            }

            else{
                print(“$keuze is fout”);
            }
      ?>
    </body>
</html>
