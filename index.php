<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url amigavel</title>
</head>

<body>
    <a href="product">Produto</a>

    <?php
    if (isset($_GET) && isset($_GET['url'])) {
        $url = explode('/', $_GET['url']);

        require 'pages/' . $url[0] . '.php';
    }
    ?>
</body>

</html>