$(function() {
  $('#submitProfile').validate({
    rules: {
      username: {
        required: true
      },
      password: {
        required: true
      },
      newPassword: {
        required: true
      }
    },
    messages: {
      username: {
        required: 'Skriv in ett användarnamn.'
      },
      password: {
        required: 'Skriv in ditt gamla lösenord.'
      },
      newPassword: {
        required: 'Skriv in ditt nya lösenord'
      }
    }
  });
});
