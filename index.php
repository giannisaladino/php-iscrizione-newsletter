<?php
require_once (__DIR__ . "/utility.php");

$email = $_POST['email'] ?? '';


if (
    str_contains($email, '@') && // Controllo se c'è @
    str_contains($email, '.')
) {
    $mailOk = true;
} else {
    $mailOk = false;
}


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
        <section>
            <form action="" method="POST">
                <input type="email" name="email" id="email" placeholder="Inserisci la tua email">
                <button>Invia</button>
            </form>
        </section>

        <section>
            <?php if ($mailOk === true) { ?>
                <div class="alert alert-primary" role="alert">
                    ACCESSO <strong>CONSENTITO</strong>
                </div>
            <?php } else { ?>
                <div class="alert alert-primary" role="alert">
                    ACCESSO <strong>NEGATO</strong>
                </div>
            <?php } ?>
            <!-- <p>
                <?= test() ?>
            </p> -->

        </section>
    </main>
</body>

</html>