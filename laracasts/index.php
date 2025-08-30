<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Dark Matter";
        $read = true;

        if ($name) {
                echo '<h1>' . "I read {$name}" . '</h1>';  
        } else {
            echo "I dont know bruv";
        }
    ?>

    <h1>
        You have read 'Whatev'
    </h1>
</body>
</html>