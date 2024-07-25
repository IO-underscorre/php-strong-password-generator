<?php
require_once './functions/functions.php';

$data = $_GET;
if (isset($data['password-lenght']) && isset($data['repetitions'])) {
    if ($data['password-lenght'] > 7 && $data['password-lenght'] < 33) {
        $repetitions_allowed = $data['repetitions'] === 'true' ? true : false;

        $letters_allowed = !isset($data['disabled-chars-letters']) ? true : false;
        $numbers_allowed = !isset($data['disabled-chars-numbers']) ? true : false;
        $symbols_allowed = !isset($data['disabled-chars-symbols']) ? true : false;

    }
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
                        PASSRWORD GENERATOR
                    </h1>
                </header>

                <main>
                    <form action="index.php" method="GET">
                        <div class="inputs-group">
                            <p class="group-legend">Password length:</p>
                            <menu class="inputs-list">
                                <li class="input-container">
                                    <input type="number" name="password-lenght" id="password-lenght" min="8" max="32" aria-label="Password length" required>
                                </li>
                            </menu>
                        </div>

                        <div class="inputs-group">
                            <p class="group-legend">Characters repetitions:</p>
                            <menu class="inputs-list">
                                <li class="input-container">
                                    <input type="radio" id="repetitions-true" name="repetitions" value="true" checked required>
                                    <label for="repetitions-true">Yes</label>
                                </li>
                                <li class="input-container">
                                    <input type="radio" id="repetitions-false" name="repetitions" value="false" required>
                                    <label for="repetitions-false">No</label>
                                </li>
                            </menu>
                        </div>

                        <div class="inputs-group">
                            <p class="group-legend">Disabled characters:</p>
                            <menu class="inputs-list">
                                <li class="input-container">
                                    <input type="checkbox" id="disabled-chars-letters" name="disabled-chars-letters">
                                    <label for="disabled-chars-letters">Letters</label>
                                </li>
                                <li class="input-container">
                                    <input type="checkbox" id="disabled-chars-numbers" name="disabled-chars-numbers">
                                    <label for="disabled-chars-numbers">Numbers</label>
                                </li>
                                <li class="input-container">
                                    <input type="checkbox" id="disabled-chars-symbols" name="disabled-chars-symbols">
                                    <label for="disabled-chars-symbols">Symbols</label>
                                </li>
                            </menu>
                        </div>

                        <div class="inputs-group">
                            <button type="submit">Submit</button>
                            <button type="reset">Reset</button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
</body>

</html>