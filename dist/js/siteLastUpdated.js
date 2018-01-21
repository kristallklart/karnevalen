(function() {
  if ($(document).ready()) {
    var siteLastUpdated = new Date(document.lastModified);

    var day = siteLastUpdated.getDate();
    var month = siteLastUpdated.getMonth() + 1;
    var year = siteLastUpdated.getFullYear();

    document.getElementById('lastUpdated').innerHTML =
      'Sidan uppdaterades senast: ' + day + '/' + month + ' ' + year;
  }
})();
