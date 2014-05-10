/* jslint browser:true */
/* jslint node:true */
/* global $, Modernizr */

// DOM Ready
$(function() {

	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		for (var i = 0; i < imgs.length; i++) {
			if (/.*\.svg$/.test(imgs[i].src)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
			}
		}
	}
    // code starts here.
    var application = false;
    if (require){
        application = true;
    }else{
        return false;
    }
    
    //display titlebar
    //bind parts.
});
