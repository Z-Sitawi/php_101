<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
    <style>
        .container {
            margin: 20px;
            width: 1000pw;
            min-height: 300px;
            border: 2px solid black;
            padding: 10px;
        }
        .sq {
            margin: 5px;
            padding: 5px;
            background-color: red;
        }

    </style>
</head>
<body style="margin: 0; background-color: lightgoldenrodyellow;">
    <h1 style="text-align: center; background-color: lightblue; padding: 10px;"><sub>php</sub> Hypertext Preprocessor 101 <sub>php</sub></h1>
    <section class="container">
        <?php
        for ($x=0; $x <3; $x++) {
            for ($i=0; $i<5; $i++) {
                for ($j=0; $j<5; $j++){
                    echo "<a class=\"sq\"><a>";
                }
                echo "<br><br>";
            }
        }
        ?>
    </section>
</body>
</html>
