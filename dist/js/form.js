(function() {
  $('#section').on('change', function() {
    if (
      document.getElementById('vacancies').innerHTML !=
      'Sektionen är fullbelagd!'
    ) {
      document.getElementById('hiddenfield').value = 'VALIDATED!';
    } else if (
      (document.getElementById('vacancies').innerHTML =
        'Sektionen är fullbelagd!')
    ) {
      document.getElementById('hiddenfield').value = '';
    } /*else {
      document.getElementById('hiddenfield').value = 'VALIDATED!';
    }*/
  });
})();
