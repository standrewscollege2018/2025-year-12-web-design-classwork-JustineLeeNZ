<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Echoed text WITHOUT a newline (\n)</h1>

    <?php
     echo "<p>first line of text in a p tag</p>";
     echo "<p>second line of text in a p tag</p>";
     ?>

    <h1>Echoed text WITH a newline (\n) to make viewing source nicer</h1>

    <?php
     echo "<p>first line of text in a p tag</p>\n";
     echo "<p>second line of text in a p tag</p>\n";
     ?>

</body>
</html>