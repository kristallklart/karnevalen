$(function() {
  $('#contentForm').validate({
    rules: {
      body: {
        required: true
      },
      image: {
        required: true
      }
    },
    messages: {
      body: {
        required: 'Skriv in en rubrik.'
      },
      image: {
        required: 'Ladda upp en bild.'
      }
    }
  });
});
