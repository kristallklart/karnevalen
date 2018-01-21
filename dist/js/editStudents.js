$(document).ready(function() {
  $('#section').on('change', function() {
    var selectedSection = $('#section').val();
    $.ajax({
      type: 'POST',
      url: '/dist/php/fetchStudentsBySection.php',
      data: JSON.stringify({
        param: selectedSection
      }),
      dataType: 'json',
      contentType: 'application/json',
      success: function(students) {
        var body = $('#students-table tbody');
        createStudentTable(students, body);
      }
    });
  });

  $('#searchStudentButton').on('click', function() {
    var searchText = $('#searchText').val();
    $.ajax({
      type: 'POST',
      url: '/dist/php/searchStudents.php',
      data: JSON.stringify({
        param: searchText
      }),
      dataType: 'json',
      contentType: 'application/json',
      success: function(students) {
        var body = $('#students-table tbody');
        $('#section').prop('selectedIndex', 0);
        createStudentTable(students, body);
      }
    });
  });

  function createStudentTable(students, tableBody) {
    tableBody.empty();
    $.each(students, function(index, student) {
      var queryString = $.param(students[index]);
      tableBody.append(
        "<tr>"+
          "<td>"+
            student.firstname+
          "</td>"+
          "<td>"+
            student.lastname+
          "</td>"+
          "<td>"+
            student.email+
          "</td>"+
          "<td>"+
            student.phone+
          "</td>"+
          "<td>"+
            student.section+
          "</td>"+
          "<td>"+
            "<a href='/dist/php/views/studentProfile.php?"+queryString+"'>Ändra</a>"+
        "</td>"+
        "</tr>"
      );
    });
  }
});
