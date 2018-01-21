$(function() {
  $('#contentForm').validate({
    rules: {
      heading: {
        required: true
      },
      body: {
        required: true
      },
      image: {
        required: true
      }
    },
    messages: {
      heading: {
        required: 'Skriv in en rubrik.'
      },
      body: {
        required: 'Skriv in brödtext.'
      },
      image: {
        required: 'Ladda upp en bild.'
      }
    }
  });
});
