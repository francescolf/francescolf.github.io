<?php
function fw() {
  $curl = curl_init();
  $cod = $_GET["codice"];
  $txt = $_GET["testo"];
  
  curl_setopt_array($curl, array(
        	CURLOPT_URL => "https://francescolf.altervista.org/notifiche?codice=" . $cod + "&testo=" . $txt,
        	CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET"
          ));

 $response9 = curl_exec($curl);
}
fw();
?>
