(function() {
  $('#contentForm').on('submit', function(e) {
    e.preventDefault();
    if ($('#contentForm').valid()) {
      var formData = new FormData(this);

      $.ajax({
        type: 'POST',
        url: '/dist/php/addNewsContent.php',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(result) {
          alertResult(result);
        }
      });
    }
  });
  function alertResult(result) {
    alert(result);
  }
})();