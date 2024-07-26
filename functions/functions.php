<?php
function get_password($password_length, $are_repetitions_allowed, $allowed_chars_string)
{
    $allowed_chars = $allowed_chars_string;
    $password_result = '';

    while (strlen($allowed_chars) && strlen($password_result) < $password_length) {
        $random_allowed_chars_index = rand(0, strlen($allowed_chars) - 1);

        $password_result .= substr($allowed_chars, $random_allowed_chars_index, 1);

        if (!$are_repetitions_allowed) {
            $allowed_chars = substr_replace($allowed_chars, '', $random_allowed_chars_index, 1);
        }
    }

    return htmlspecialchars($password_result);
}


function generate_password($password_length, $are_repetitions_allowed, $are_char_letters_allowed, $are_char_numbers_allowed, $are_char_symbols_allowed)
{
    $allowed_chars = '';

    if ($are_char_letters_allowed) {
        $allowed_chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $allowed_chars .= strtolower('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    }

    if ($are_char_numbers_allowed) {
        $allowed_chars .= '1234567890';
    }

    if ($are_char_symbols_allowed) {
        $allowed_chars .= ' !"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
    }

    return get_password($password_length, $are_repetitions_allowed, $allowed_chars);
}
