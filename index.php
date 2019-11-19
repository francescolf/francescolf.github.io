<?php
function fw() {
  $curl = curl_init();
  $cod = $_GET["codice"];
  $txt = $_GET["testo"];
  
  file_get_contents("https://francescolf.altervista.org/notifiche?codice=" . $cod . "&testo=" . $txt);
}
fw();
?>
