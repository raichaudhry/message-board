<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Message Board</title>
</head>
<body>
<div id = "topbar">
    <h1>RAICHAUDHRY.COM BRINGS YOU...</h1>
    <h2>Message Board Beta!</h2>
</div>
<div id = "userInput">
<input type = "text" placeholder = "Message"id = "message"></input>
<input type = "name" placeholder = "Name"id = "name"></input>
<button onclick = "submit();">Submit</button>
</div>
<?php
$file = fopen("txt.txt", "a") or die("Unable to open file!");
$txt = "TEST THINGY\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
<script src = "index.js"></script>
</body>
</html>
