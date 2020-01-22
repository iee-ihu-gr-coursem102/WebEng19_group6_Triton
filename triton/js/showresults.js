jQuery(function () {
  $('#search-form').submit(function () {
    var search = $('#search').val();
    console.log("1");
    $.ajax({
      url: '/triton/php/searchSongApi.php',
      dataType: 'JSON',
      type: 'post',
      data: {
        //"search": $('#search').val(),
        search: search,
      },
      success: function (data) {
        $("#results").removeClass("d-none");
        $('#resulttable').html('');
        $('#resulttable').append('<thead class="thead-dark"><tr> <th scope="col">Event</th> <th scope="col">Date</th> <th scope="col">Weather</th> <th scope="col">Actions</th>  </tr></thead>');
        $('#resulttable').append('<tbody id="tablebody"></tbody>');
        console.log(data);
        // d=$.parseJSON(JSON.stringify(data));
        //console.log(d);
        var output;
        $.each(data, function (i, e) {
          $.each(e.results.event, function (a, b) {
            var newname = b.displayName;
            var dateAr = b.start.date.split('-');
            var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0].slice(-2);
            if (b.type == "Concert") {
              var newname = "";
              var name = b.displayName.split(" ");
              for (var i = 0; i < name.length - 3; i++)
                newname = newname + name[i] + " ";

              output += '<tr><td>' + newname + '</td><td class="text-nowrap">' + newDate + '</td><td align="center"> <i class="fas fa-sun"></i></td> <td> <button id="fav" type="button" class="btn btn-success"><i id="heart" class="far fa-heart"></i></button> </td></tr>';
            }
            else {
				if(b.start.date != b.end.date){
              var enddateAr = b.end.date.split('-');
              var newendDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0].slice(-2);
              output += '<tr><td>' + newname + '</td><td class="text-nowrap"> Start:' + newDate + '<br>End:' + newendDate + '</td><td align="center"> <i class="fas fa-sun"></i></td><td>  <button id="fav" type="button" class="btn btn-success"><i id="heart" class="far fa-heart"></i></button> </td></tr>';
				}
				else {
			output += '<tr><td>' + newname + '</td><td class="text-nowrap">' + newDate + '</td><td align="center"> <i class="fas fa-sun"></i></td><td>  <button id="fav" type="button" class="btn btn-success"><i id="heart" class="far fa-heart"></i></button> </td></tr>';
				} 
			}
          });
        });
        $('#tablebody').html(output);

      }
    });
    return false;
  });
});