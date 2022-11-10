<?php
    function asset($path){
        return BASE_URL."/asset"."/".trim($path, "/");exit;
    }
?>
