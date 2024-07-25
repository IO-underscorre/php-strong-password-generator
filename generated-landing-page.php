<?php
session_start();

if (!isset($_SESSION['password'])) {
    session_unset();
    session_destroy();
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link rel="stylesheet" href="./syle/style.css">
</head>

<body>
    <div class="page-wrapper">
        <div>
            <div class="content">
                <header>
                    <h1>
                        PASSRWORD GENERATED
                    </h1>
                </header>

                <main>
                    <div class="generated-password-container">
                        <b>
                            <?php echo $_SESSION['password']; ?>
                        </b>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>