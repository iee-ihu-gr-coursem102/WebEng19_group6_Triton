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
		$('#resulttable').append('<thead class="thead-dark"><tr> <th scope="col">Event</th> <th scope="col">Date</th> <th scope="col">Actions</th> </tr></thead>');
		$('#resulttable').append('<tbody id="tablebody"></tbody>');
        console.log(data);
        // d=$.parseJSON(JSON.stringify(data));
        //console.log(d);
        var output;
        $.each(data, function (i, e) {
			        $.each(e.results.event, function (a, b) {
									 var dateAr = b.start.date.split('-');
									 var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0].slice(-2);
									output += '<tr><td>' + b.displayName + '</td><td class="text-nowrap">' + newDate + '</td><td>  <button type="button" class="btn btn-success"><i class="fas fa-heart"></i></button> </td></tr>'; 
								 });
		 });
        $('#tablebody').html(output);

      }
    });
    return false;
  });
});