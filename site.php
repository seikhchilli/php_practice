<!DOCTYPE html>
<html>
    <head>
        <title>php learning</title>
</head>
<body>
    <?php
        $age = 35;
        $name = "John";
        echo "There once was a man named $name<br>";
        echo "He was $age years old <br>";
        echo "He really liked the name $name <br>";
        echo "But didn't like being $age <br><br><br>";

        $phrase = "Seikhchilli";
        echo strtoupper($phrase);
        echo "<br>";
        echo strlen($phrase);
        echo "<br>";
        echo $phrase[0];
        echo "<br>";
        echo str_replace("chilli", "billi", $phrase);   //string to be replaced, string after replaced, phrase
        echo "<br>";
        echo substr($phrase, 5, 3);   //phrase, index, number of characters

    ?>
</body>
</html>
