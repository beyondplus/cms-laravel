function bp_desktop_screen(url) {
	if(screen.availWidth < 800 ) {
	    document.cookie = "screen=mobile";
	    window.location.href = url;
	}
}

function bp_mobile_screen(url) {
	if(screen.availWidth > 800 ) {
		document.cookie = "screen=desktop";
	    window.location.href = url;
	}	
}

