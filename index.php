<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do desafio 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado</h1>

    <main>
        <?php 
        $numero = $_GET['numero'] ?? 0;
        $adicionar = $numero + 1;
        $retirar = $numero -1;

        echo "<div>
                    <h2>Esse é o seu número:</h2>
                    <h3>$numero</h3>
                    <h2>Antecessor:</h2>
                    <h3>$retirar</h3>
                    <h2>Sucessor:</h2>
                    <h3>$adicionar</h3>
            </div>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>