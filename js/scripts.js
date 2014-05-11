/* jslint browser:true */
/* jslint node:true */
/* global $, Modernizr, Primus */

// DOM Ready


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
if (require) {
    application = true;
} else {
    return false;
}

$('#launcher').toggle();
var primus = Primus.connect('http://salvationdevelopment.com');
primus.on('data', function message(data) {
    console.log('Received a new message from the server', data);
});

//bind parts.
function closeAllScreens() {
    $().css('display, none');
}

function openScreen(id) {
    closeAllScreens();
    $(id).toggle();
}

function joinGamelist() {
    primus.write({
        serverEvent: 'joinActiveGames'
    });
}
function leaveGamelist() {
    primus.write({
        serverEvent: 'leaveActiveGames'
    });
}
function hostGame(parameters){
    primus.write({
        serverEvent: 'hostgame',
        format: parameters
    });
}