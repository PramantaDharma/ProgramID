<?php 

class Flasher {
    public static function setFlash($message, $action, $type)
    {
        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type,
        ];
    }

    public function flash()
    {
        // Isi dahulu tampilan bootstrap yg diinginkan, nanti ganti isinya sesuai di atas
    }

}