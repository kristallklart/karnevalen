(function() {
  var countdownDate = new Date(2018, 5, 18, 12, 0, 0).getTime();

  var x = setInterval(function() { //Runs the script every second.

    //var offSet = new Date().getTimezoneOffset();

    var todaysDateAndTime = new Date().getTime() - 1000 * 60 * 60; //Adjusted for Swedish summer time
    var timeDifference = countdownDate - todaysDateAndTime;

    var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

    document.getElementById('countdownTimer').innerHTML =
      'Karnevalen går av stapeln om: ' +
      days +
      ' dagar ' +
      hours +
      ' timmar ' +
      minutes +
      ' minuter ' +
      ' och ' +
      seconds +
      ' sekunder ';

    if (timeDifference <= 0) {
      clearInterval(x); //Stops the running of the above script
      document.getElementById('countdownTimer').innerHTML =
        'Karnevalen är här!';
    }
  }, 1000); //The script runs every second.
})();
