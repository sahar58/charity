$(document).ready(function () {
    $('#dtBasicExample').DataTable({
      "paging": false // false to disable pagination (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
  });

  $(document).ready(function () {
    $('#dt-basic-checkbox').dataTable({
  
      columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
      }],
      select: {
        style: 'os',
        selector: 'td:first-child'
      }
    });
  });
  

  $(function () {

    // Start counting from the third row
    var counter = 1;

    $("#insertRow").on("click", function (event) {
        event.preventDefault();

        var newRow = $("<tr>");
        var cols = '';

        // Table columns
        cols += '<th scrope="row">' + counter + '</th>';
        cols += '<td><input class="form-control rounded-0" type="text" name="fullname" placeholder="full name"></td>';
        cols += '<td><input class="form-control rounded-0" type="text" name="nid" placeholder="national id"></td>';
        cols += '<td><input class="form-control rounded-0" type="text" name="age" placeholder="age"></td>';
        cols += '<td><input class="form-control rounded-0" type="text" name="address" placeholder="address"></td>';
        cols += '<td><input class="form-control rounded-0" type="text" name="support" placeholder="support"></td>';
        cols += '<td><input class="form-control rounded-0" type="text" name="phone" placeholder="phone"></td>';
        cols += '<td><button class="btn btn-danger rounded-0" id ="deleteRow">Delete</button</td>';

        // Insert the columns inside a row
        newRow.append(cols);

        // Insert the row inside a table
        $("table").append(newRow);

        // Increase counter after each row insertion
        counter++;
    });

    // Remove row when delete btn is clicked
    $("table").on("click", "#deleteRow", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
});
