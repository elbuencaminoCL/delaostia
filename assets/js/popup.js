
import $ from 'jquery';

$( '.beerLogo' ).on( 'click', (ev) => {
	$( '.modalWrapper' ).addClass( 'is-active' )
})

$( '.popupClose' ).on( 'click', (ev) => {
	ev.preventDefault();
	$( '.modalWrapper' ).removeClass( 'is-active' )
})