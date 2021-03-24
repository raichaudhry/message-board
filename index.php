<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Board!</title>
</head>
<body>
    <input id = "message"></input>
    <input id = "name"></input>
    <button onclick = "submit();">Submit</button>
<?php
$file = fopen("txt.txt", "a") or die("Unable to open file!");
$txt = "TEST THINGY\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>