var tuxcito_toggle = document.getElementById('responsive-toggle');
var tuxcito_close_x = document.getElementById('tuxcito_close_x');
var tuxcito_nav = document.getElementById('responsive-menu');

tuxcito_toggle.addEventListener('click', function() {
    if (tuxcito_nav.style.display === 'flex') {
        tuxcito_nav.style.display = 'none';
        tuxcito_close_x.style.display = 'none';
    } else {
        tuxcito_nav.style.display = 'flex';
        tuxcito_close_x.style.display = 'block';
    }
});

tuxcito_close_x.addEventListener('click', function(e) {
    e.preventDefault()
    tuxcito_nav.style.display = 'none';
});
