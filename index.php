
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to index.php</h1>
    <?php
    require "Automobile.php";
    $licencePlate = "34asd34";
    $brand = "bmw";
    $model = "320i";
    $modelYear = "2021";
    $color ="black";

  
    $auto1 = new Automobile($licencePlate, $brand,$model,$modelYear,$color);
    

    ?>
    <form action = "index.php" method = "POST">
         licencePlate: <input type = "text" name = "licencePlate" value="<?php $licencePlate ?>" />
         brand: <input type = "text" name = "brand" value="<?php $brand ?>" />
         model: <input type = "text" name = "model" value="<?php $model ?>" />
         modelYear: <input type = "text" name = "modelYear" value="<?php $modelYear ?>" />
         color: <input type = "text" name = "color" value="<?php $color ?>" />
         <input type = "submit" />
      </form>

    <?php
        if(isset($_POST['licencePlate'],$_POST['brand'],$_POST['model'],$_POST['modelYear'],$_POST['color'])){
            $licencePlate=htmlentities($_POST['licencePlate'],ENT_QUOTES,'UTF-8');
            $brand=htmlentities($_POST['brand'],ENT_QUOTES,'UTF-8');
            $model=htmlentities($_POST['model'],ENT_QUOTES,'UTF-8');
            $modelYear=htmlentities($_POST['modelYear'],ENT_QUOTES,'UTF-8');
            $color=htmlentities($_POST['color'],ENT_QUOTES,'UTF-8');
            echo "{licencePlate}, {brand},{model},{modelYear},{color},";
        }
    ?>

</body>
</html>