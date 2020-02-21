window.addEventListener('DOMContentLoaded', function() {
    /* document.querySelectorAll('.answer').forEach( function(elem) {
        elem.onclick = function() {
            document.querySelector('.modal-form').classList.toggle('modal-form_active');
        }
    }) */

    $('.section').on('click', '.answer', function(){
        $('.modal-form').toggleClass('modal-form_active');
    });
});