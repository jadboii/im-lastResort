document.addEventListener('DOMContentLoaded', function () {
    var headerRow = document.getElementById('headerRow');
    var cells = headerRow.getElementsByTagName('th');

    for (var i = 0; i < cells.length; i++) {
      cells[i].addEventListener('click', handleSort);
    }

    var sortOrder = 0; // Tracks the current sort order

    function handleSort(e) {
      var columnIndex = Array.prototype.indexOf.call(cells, e.target);

      // Retrieve all table rows excluding the header row
      var table = document.querySelector('.table-bordered');
      var rows = Array.from(table.getElementsByTagName('tr')).slice(1);

      rows.sort(function (row1, row2) {
        var value1 = row1.cells[columnIndex].textContent.trim();
        var value2 = row2.cells[columnIndex].textContent.trim();

        // Compare the values based on the sort order
        if (sortOrder === 0) {
          return value1.localeCompare(value2);
        } else if (sortOrder === 1) {
          return value2.localeCompare(value1);
        }
      });

      // Clear the table body
      table.tBodies[0].innerHTML = '';

      // Append the sorted rows back to the table body
      rows.forEach(function (row) {
        table.tBodies[0].appendChild(row);
      });

      // Toggle the sort order for the next click
      sortOrder = (sortOrder + 1) % 2;
    }
  });