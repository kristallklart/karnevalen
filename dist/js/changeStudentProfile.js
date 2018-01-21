$(document).ready(function() {
  $('#saveStudentButton').on('click', function() {
    var formData = getFormData();
    $.ajax({
      type: 'POST',
      url: '/dist/php/saveStudent.php',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(result) {
        alertResult(result, '/dist/php/views/editStudents.php');
      }
    });
  });

  $('#removeStudentButton').on('click', function() {
    var formData = getFormData();
    $.ajax({
      type: 'POST',
      url: '/dist/php/removeStudent.php',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(result) {
        alertResult(result, '/dist/php/views/editStudents.php');
      }
    });
  });

  function getFormData() {
    return new FormData($('#changeStudentForm')[0]);
  }

  function alertResult(result, location) {
    alert(result);
    window.location.href=location;
  }
});