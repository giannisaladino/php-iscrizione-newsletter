<?php
require_once (__DIR__ . "/utility.php");
$email = $_POST['email'] ?? null;

if($email !== null) {
    
    if(validate($email)) {
        
        session_start();

        $_SESSION['email'] = $email;

        header('Location: ./sub.php');
    }

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
    <main class="">
        <section class="mt-5 mb-3 text-center">
            <div class="container">
                <form action="" method="POST">
                    <h1>Iscrizione Newsletter</h1>
                    <input class="form-control mb-2" type="email" name="email" id="email"
                        placeholder="Inserisci la tua email">
                    <button class="btn btn-primary">Invia</button>
                </form>
            </div>
        </section>

        <?php
        if ($email !== null) {
            ?>
            <section>
                <div class="container text-center">
                    <?php if (validate($email)) { ?>
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
            <?php
        }
        ?>
    </main>
</body>

</html>