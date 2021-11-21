var tuxcito_toggle = document.getElementById('responsive-toggle');

tuxcito_toggle.addEventListener('click', function() {
    var tuxcito_nav = document.getElementById('responsive-menu');
    tuxcito_nav.classList.toggle('hidden');
    console.log('click');
});
