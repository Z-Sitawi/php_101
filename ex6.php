<?php
echo "Salut php, nous somme le ".date("D/M/Y")."\n";
$h = date("H");
if ($h < 12)
    echo "C'est le matin.";
elseif ($h == 12)
    echo "C'est le mid.";
elseif ($h <= 18)
    echo "C'est l'après-midi.";
else
    echo "C'est la nuit.";
echo "\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex6.php" method="POST">
        <input type="date" name="date">
        <input type="submit">
    </form>
</body>
</html>

<?php
$date = $_POST["date"];
echo $date."<br>";
echo trim($date, "-");
?>
