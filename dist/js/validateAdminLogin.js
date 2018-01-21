$(function() {
  $('#loginForm').validate({
    rules: {
      username: {
        required: true
      },
      password: {
        required: true
      }
    },
    messages: {
      username: {
        required: 'Skriv in ett användarnamn.'
      },
      password: {
        required: 'Skriv in ett lösenord.'
      }
    }
  });
});
