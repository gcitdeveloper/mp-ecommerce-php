<?php
$url = file_get_contents("https://api.mercadopago.com/v1/payments/7726116880?access_token=APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
    
$file = fopen("pago.txt", "w");
fputs($file,$url);
fclose($file);     
?>