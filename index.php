<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Spray+Paint&display=swap" rel="stylesheet">
  </head>
</head>
<body class="overflow-hidden bg-dark text-white">
    <?php
    $title = 'A bunda, que engraçada';
    $text = 'A bunda, que engraçada.
    Está sempre sorrindo, nunca é trágica.
    
    Não lhe importa o que vai
    pela frente do corpo. A bunda basta-se.
    Existe algo mais? Talvez os seios.
    Ora — murmura a bunda — esses garotos
    ainda lhes falta muito que estudar.
    
    A bunda são duas luas gêmeas
    em rotundo meneio. Anda por si
    na cadência mimosa, no milagre
    de ser duas em uma, plenamente.
    
    A bunda se diverte
    por conta própria. E ama.
    Na cama agita-se. Montanhas
    avolumam-se, descem. Ondas batendo
    numa praia infinita.
    
    Lá vai sorrindo a bunda. Vai feliz
    na carícia de ser e balançar.
    Esferas harmoniosas sobre o caos.
    
    A bunda é a bunda,
    redunda.';
    $badword = $_GET['bad-word'];
    ?>
    <div class="row justify-content-center my-5">
        <div class="col-auto">
            <h1 class="text-uppercase text-danger fw-bold">
                <?php echo str_ireplace($badword,'***', $title)?>
            </h1>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-auto">
            <p class="lh-5">
                <?php echo str_ireplace($badword,'***', $text)?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-auto mb-5">
            <span class="fw-bold">LENGTH:</span>
            <?php echo strlen(str_ireplace($badword,'***', $text)) + strlen(str_ireplace($badword,'***', $title)) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-auto">
            <form action="" method="get">
                <label style="font-family: 'Rubik Spray Paint', cursive;" for="bad-word">BAD WORD:
                    <input class="rounded" type="text" id="bad-word" name="bad-word">
                </label>
                <button class="btn btn-danger">CENSOR</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>




