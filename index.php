<?php
require_once (__DIR__ . "/utility.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <section class="mt-5 mb-3 text-center">
            <div class="container">
                <form action="" method="POST">
                    <input type="email" name="email" id="email" placeholder="Inserisci la tua email">
                    <button>Invia</button>
                </form> 
            </div>
        </section>

        <section>
            <div class="container text-center">
                <?php if ($mailOk === true) { ?>
                    <div class="alert alert-primary" role="alert">
                        <span>ACCESSO <strong>CONSENTITO</strong></span>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-primary" role="alert">
                        <span>ACCESSO <strong>NEGATO</strong></span>
                    </div>
                <?php } 
                ?>
            </div>
        </section>
    </main>
</body>

</html>