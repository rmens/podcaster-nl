<?php

add_filter( 'gettext', 'techsnacks_gettext', 10, 3 );
function techsnacks_gettext($vertaald, $orineel, $domein) {
	if($orineel === 'Reacties zijn afgesloten.') {
		return 'Reageer op deze uitzending via het <a href=“http://techsnacks.nl/submit/>reactieformulier</a>.';
	}
	
	return $vertaald;
}
