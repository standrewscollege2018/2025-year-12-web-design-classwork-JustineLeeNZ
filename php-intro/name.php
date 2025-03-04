<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $chosen_name = $_GET["name"];

    if ($chosen_name == 'Angus') {

        echo "Angus is cool!";
    } elseif ($chosen_name == 'Josh') {
        echo "Josh is loud!";
    }
    else {
        echo "Sorry, you're not cool";
    }
    

    ?>
    
</body>
</html>