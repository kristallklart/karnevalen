$(function() {
  $('#submitApplication').on('submit', function(e) {
    if (
      document.getElementById('vacancies').innerHTML ==
      'Sektionen är fullbelagd!'
    ) {
      e.preventDefault();
      //$('#vacancies').css('color', 'rgb(214, 36, 36)');
    }
  });
  $.validator.addMethod(
    'lettersonly',
    function(value, element) {
      return this.optional(element) || /^[a-ö]+$/i.test(value);
    },
    'Endast bokstäver tillåtna.'
  );

  $.validator.addMethod(
    'nowhitespace',
    function(value, element) {
      return this.optional(element) || /^\S+$/i.test(value);
    },
    'Inga mellanslag tillåtna.'
  );

  $('#submitApplication').validate({
    rules: {
      section: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      firstname: {
        required: true,
        nowhitespace: true,
        lettersonly: true
      },
      lastname: {
        required: true,
        nowhitespace: true,
        lettersonly: true
      },
      phonenbr: {
        required: false,
        digits: true,
        maxlength: 10
      }
    },
    messages: {
      section: {
        required: 'Välj en sektion.'
      },
      firstname: {
        required: 'Skriv in ditt förnamn.'
      },
      lastname: {
        required: 'Skriv in ditt efternamn.'
      },
      email: {
        required: 'Skriv in en mejladress.',
        email: 'Skriv in en <em>giltig</em> mejladress.'
      },
      phonenbr: {
        digits: 'Endast siffror tillåtna.',
        maxlength: 'Max tio siffror tillåtna.'
      }
    }
  });
});
