$(document).ready(function() {
    $('.login-input').on('keydown', function(e) {
        if (e.keyCode === 32) {
            e.preventDefault();
        }
    });
});