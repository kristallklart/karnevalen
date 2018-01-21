(function() {
  $('#section').on('change', function() {
    var selectedSection = $('#section').val();
    $.ajax({
      type: 'POST',
      url: '/dist/php/getVacancies.php', //Runs the getVacancies.php file on the server.
      data: JSON.stringify({
        //Transforms an object to JSON-format
        param: selectedSection
      }),
      dataType: 'json', //We expect JSON from the server
      contentType: 'application/json', //What we send to the server is JSON.
      success: function(result) {
        //Result is what we get from the server, a JSON object.
        console.log(result);
        if (result.vacancies != '0') {
          $('#vacancies').text(result.vacancies);
          //document.querySelector('#vacancies').innerHTML = result.vacancies; //Chooses the element with the ID vacancies.
        } else if (result.vacancies == '0') {
          $('#vacancies').text('Sektionen är fullbelagd!');
          // document.querySelector('#vacancies').innerHTML =
          //   'Sektionen är fullbelagd!';
        } //else {
        //document.querySelector('#vacancies').innerHTML = 'Välj en sektion!';
        //}
      }
    });
  });
})();
