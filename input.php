<!DOCTYPE html>
<html>
    <head>
        <title>php learning</title>
</head>
<body>

        <form action="input.php" method = "post">       
            Name: <input type = "text" name= "name"/>
            

            <br>

            Age: <input type = "number" name = "age">
            <input type = "submit" value="submit">
        </form>
        <br>
        Your name is :
        <?php
            echo $_POST["name"];               //$_GET

            //POST doesnot show input in URL. whereas GET shows
        ?>
        Your age is:
        <?php
            echo $_POST["age"];
        ?>
</body>
</html>