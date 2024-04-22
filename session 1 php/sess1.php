<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $age = 10 ;
    $name = "Youssef"
    ?>
    <h1>learning PHP</h1>
    <header>
        <div>
            <h1>M107 : DEVOLOPPER DES SITE WEB DYNAMIQUES</h1>
        </div>
        <p>I am <?php echo $name; ?> and im <?php echo $age; ?> years old</p>
    </header>
    <?php 
        // this is a comment
        echo "<br>";
        echo"<h2>hello</h2>";
        # this is also a comment
        echo $age;

        //type casting
        $ageStr = (string)$age;
    ?>
</body>
</html>