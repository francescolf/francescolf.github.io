<?php
function fw() {
  $curl = curl_init();
  $cod = $_GET["codice"];
  $txt = $_GET["testo"];
  
  header("https://francescolf.altervista.org/notifiche?codice=" . $cod . "&testo=" . $txt);
}
fw();
?>
