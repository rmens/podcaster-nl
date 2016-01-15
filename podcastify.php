<?php

/* Voor zijbalk op /blog/ (overschrijft wp-nl) */

add_filter( 'gettext', 'techsnacks_gettext', 10, 3 );
function techsnacks_gettext($vertaald, $origineel, $domein) {
	if($origineel === 'Categories') {
		return 'Thema'/s';
	}
	
	return $vertaald;
}
