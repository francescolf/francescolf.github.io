//scorciatoia ;)

<?php

function fw() {
	$cod = file_get_contents('php://input');
        echo $cod;
}
fw();
?>
