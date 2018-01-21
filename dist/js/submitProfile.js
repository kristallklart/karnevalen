$(document).ready(function() {
  $('#submitProfile').on('submit', function(e) {
    e.preventDefault();
    if($('#submitProfile').valid()) {
      var formData = new FormData(this);

      $.ajax({
        type: 'POST',
        url: '/dist/php/changeProfile.php',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(result) {
          alert(result);
        }
      });
    }
  });
});