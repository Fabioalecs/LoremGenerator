<?php

$conteudo = file_get_contents('http://loripsum.net/api');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Random Lorem Ipsum</h1>
    <p><?php echo $conteudo ?></p>
    
</body>
</html>