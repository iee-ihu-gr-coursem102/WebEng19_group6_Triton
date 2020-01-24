jQuery(function () {
  $('#search-form').submit(function (e) {
    var search = 'thessaloniki';
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
		var isfavorite;	
		var weather;
		var weathercl;

        $.each(data, function (i, e) {
          $.each(e.results.event, function (a, b) {
			var id = b.id;
            var newname = b.displayName;
            var dateAr = b.start.date.split('-');
			var starttime = b.start.time;
            var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0].slice(-2);			
			isfavorite = $.ajax({
					type: 'post',
					url: '/triton/php/checkfavorites.php', 
					data: {id: id},
					async: false,
					success: function () {	
}
}).responseText;
isfavorite = $.trim(isfavorite);

weather = $.ajax({ url: '/triton/php/getWeatherApi.php',
         data: { search:search, startdate:newDate , starttime:starttime},
		 async: false,
         type: 'post',
        dataType: 'JSON',
         success: function() {             
         }
        }).responseText;

if (weather === "clear sky") {weathercl="fas fa-moon";} else if (weather.includes("rain")) {weathercl="fas fa-cloud-moon-rain"} else if (weather.includes("cloud")) {weathercl="fas fa-cloud-moon"}
if (isfavorite === "notfav") { isfavorite="far fa-heart"; } else { isfavorite="fas fa-heart";}
            if (b.type == "Concert") {
              var newname = "";
              var name = b.displayName.split(" ");
              for (var i = 0; i < name.length - 3; i++)
                newname = newname + name[i] + " ";
			
              output += '<tr><td>' + newname + '</td><td class="text-nowrap">' + newDate + `</td><td align="center"> <i class="${weathercl}"></i></td>` +` </td><td>  <button id="fav" type="button" class="btn btn-success" onclick="addfavorite(${id}, this)"> <i id="heart" class="${isfavorite}" ></i></button> </td></tr>` ;
				}
            else {
				if(b.start.date != b.end.date){
              var enddateAr = b.end.date.split('-');
              var newendDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0].slice(-2);
              output += '<tr><td>' + newname + '</td><td class="text-nowrap"> Start:' + newDate + '<br>End:' + newendDate + `</td><td align="center"> <i class="${weathercl}"></i></td>` + `</td><td>  <button id="fav" type="button" class="btn btn-success" onclick="addfavorite(${id})"><i id="heart" class="${isfavorite}"></i></button> </td></tr>`;
				}
				else {
			output += '<tr><td>' + newname + '</td><td class="text-nowrap">' + newDate + `</td><td align="center"> <i class="${weathercl}"></i></td>` + `</td><td>  <button id="fav" type="button" class="btn btn-success"onclick="addfavorite(${id})"><i id="heart" class="${isfavorite}"></i></button> </td></tr>`;

				} 
			}
          });
        });
        $('#tablebody').html(output);

      }
    });
	e.preventDefault();
    return false;
  });
  
});