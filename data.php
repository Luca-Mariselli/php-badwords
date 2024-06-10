<!DOCTYPE html>
<?php 
$nome = $_GET['nome'];
$censurata = $_GET['censurata'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nome:</h1>
    <ul>
        <li><?php echo $nome;?></li>
        <li>Il paragrafo e` lungo <?php echo strlen($censurata);?> caratteri</li>
    </ul>
</body>
</html>