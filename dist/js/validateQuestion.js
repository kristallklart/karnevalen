$(function() {
  $('#submitQuestion').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      question: {
        required: true
      },
      subject: {
        required: true
      }
    },
    messages: {
      email: {
        required: 'Skriv in en mejladress.',
        email: 'Skriv in en <em>giltig</em> mejladress.'
      },
      question: {
        required: 'Skriv in en fråga.'
      },
      subject: {
        required: 'Skriv in ett ämne.'
      }
    }
  });
});
