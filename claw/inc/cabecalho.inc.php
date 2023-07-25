<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Claw</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="img/claw_logo_1.png">
</head>
<body>
    <header>

        <section class="palette_modes palette_green">
        <h3>Escolha sua paleta de cores:</h3>
            <div class="color_palette">
                <button onclick="changeColorPalette(1)">Green</button>
                <button onclick="changeColorPalette(2)">Black-red</button>
                <!-- Adicione mais botões para novas paletas -->
            </div>
        </section>

        <a href="sobre.php"><img src="img/claw_logo_1.png" alt="Claw" width="25%"></a>
        <nav class=menu_opcoes>
            <ul>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="jogos.php">Jogos</a></li>
                <li><a href="ajuda.php">Ajuda</a></li>
            </ul>
        </nav>
    </header>