<DOCTYPE html>
<html>
<head>
    <title>Weergeven van namen met een for-loop (omgekeerd)</title>
</head>

<body>
    <?php
        $weekdagen = array("Zondag ","Zaterdag ","Vrijdag ","Donderdag ","Woensdag ","Dinsdag ", "Maandag");
        print("De weekdagen (omgekeerd):<br>");
        print("<ol>");

        for($i = 0; $i < count($weekdagen); $i++)
        print ( "<li>$weekdagen[$i]</li>" );
        print("</ol>");

    ?>
</body>
</html>
