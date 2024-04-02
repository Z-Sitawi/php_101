<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            margin-top: 15px;
            border: 1px solid;
            border-collapse: collapse;
        }
        table tr td {
            padding: 10px;
        }
        table tr th {
            padding: 5px;
            background: lightblue;
        }
    </style>
</head>
<body>
    <h2>Check if Date is valid:</h2>
    <form action=<?= $_SERVER["PHP_SELF"]?> method="get" >
        <table>
            <tr>
                <th><label for="date">Date</label></th>
                <td><input type="text" name="date"></td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>

<?php
    $date = $_GET['date'];
    if (isset($date)){
        $date = explode('-', $date);
        $year = $date[0];
        $month = $date[1];
        $day = $date[2];
        /*if (checkdate($month, $day, $year)){
            echo 'Valid';
        } else {
            echo 'Not valid<br>';
        }*/
    }
    $SA = $_SERVER["SERVER_ADDR"];
    $agent = $_SERVER["HTTP_USER_AGENT"];
    $host = $_SERVER["SERVER_NAME"];
    $RA = $_SERVER["REMOTE_ADDR"];
    $HA = $_SERVER["HTTP_HOST"];
    $method = $_SERVER["REQUEST_METHOD"];
    echo "<table>
            <tr>
                <th>SERVER ADDRESS</th>
                <td>$SA</td>
            </tr>
            <tr>
                <th>SERVER_NAME</th>
                <td>$host</td>
            </tr>
            <tr>
                <th>REMOTE ADDRESS</th>
                <td>$RA</td>
            </tr>
            <tr>
                <th>HOST ADDRESS</th>
                <td>$HA</td>
            </tr>
            <tr>
                <th>USER AGENT</th>
                <td>$agent</td>
            </tr>
            <tr>
                <th>Method</th>
                <td>$method</td>
            </tr>
    </table>";
?>



<?php
$SERVER_SOFTWARE = $_SERVER["SERVER_SOFTWARE"];
$REQUEST_METHOD = $_SERVER["REQUEST_METHOD"];
$PHP_SELF = $_SERVER["PHP_SELF"];
$GATEWAY_INTERFACE = $_SERVER["GATEWAY_INTERFACE"];
$SERVER_ADDR = $_SERVER["SERVER_ADDR"];
$HTTPS = $_SERVER["HTTPS"];
$REMOTE_PORT = $_SERVER["REMOTE_PORT"];
$REMOTE_USER = $_SERVER["REMOTE_USER"];
$HTTP_ACCEPT_LANGUAGE = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$HTTP_CONNECTION = $_SERVER["HTTP_CONNECTION"];
$HTTP_HOST = $_SERVER["HTTP_HOST"];
?>
