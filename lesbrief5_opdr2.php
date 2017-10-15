<DOCTYPE html>
<html>
<head>
    <title>Weergeven van namen met een for-loop</title>
</head>

<body>
    <?php
        $weekdagen = array("Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag","Zaterdag", "Zondag");
        print("De weekdagen:<br>");
        print("<ol>");

        for($i = 0; $i < count($weekdagen); $i++)
        print ( "<li>$weekdagen[$i]</li>" );
        print("</ol>");

    ?>
</body>
</html>
