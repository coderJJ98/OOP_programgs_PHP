<?php
    include 'Properties_methods.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $person1= new Person("jash","21");
        echo $person1->name;
        echo $person1->age;
        

    ?>
</body>
</html>