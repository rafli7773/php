<?php

class Flasher
{
    public static function setToasts($pesan)
    {
        $_SESSION['toasts'] = [
            "pesan" => $pesan
        ];
    }

    public static function toasts()
    {
        if (isset($_SESSION['toasts'])) {
            echo '<span class="toasts-gua">' . $_SESSION['toasts']['pesan'] . '<i class="material-icons right">done</i></span>';
        }
        unset($_SESSION['toasts']);
    }
}
