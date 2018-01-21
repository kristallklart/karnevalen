$(document).ready(function() {
  $('#menu-button').on('click', function() {
    $(this).toggleClass('open');

    $('#navbar').toggleClass('open');
  });

});