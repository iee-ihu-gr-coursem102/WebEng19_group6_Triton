jQuery(function () {
  $('#search-form').submit(function (e) {
    var search = 'thessaloniki';
    console.log("1");
$.ajax({
      url: './php/searchSongApi.php',
      dataType: 'JSON',
      type: 'post',
      data: {
        //"search": $('#search').val(),
        search: search,
      },
	    beforeSend: function() {
   $("div#divLoading").addClass('show');
  },
      success: function (data) {
		     $("div#divLoading").removeClass('show');
		$('#response').html("");
        $("#results").removeClass("d-none");
        $('#resulttable').html('');
		$('#resulttable').append('<thead class="thead-dark"><tr> <th scope="col">Event</th> <th scope="col">Date</th> <th scope="col">Time</th> <th scope="col">Weather</th> <th scope="col">Actions</th>  </tr></thead>');
        $('#resulttable').append('<tbody id="tablebody"></tbody>');
        console.log(data);
        // d=$.parseJSON(JSON.stringify(data));
        //console.log(d);
        var output;
		var isfavorite;	
		var weather;
        $.each(data, function (i, e) {
          $.each(e.results.event, function (a, b) {
			var weathercl = "";
			var weather= "";
			var id = b.id;
			var temp="";
			var cel = "";
            var newname = b.displayName;
            var dateAr = b.start.date.split('-');
			var starttime = b.start.time;

            var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0].slice(-2);			
			isfavorite = $.ajax({
					type: 'post',
					url: './php/checkfavorites.php', 
					data: {id: id},
					async: false,
					success: function () {	
}
}).responseText;
isfavorite = $.trim(isfavorite);
      url: './php/searchSongApi.php',


$.ajax({ url: './php/getWeatherApi.php',
        dataType: 'JSON',
		 async: false,
         success: function(weadata) { 

        console.log(weadata);
		$.each(weadata.list, function (f, g) {
			var weti= g.dt_txt.substr(11, 2);
			var weda= g.dt_txt.substr(0, 10);			
					if (weda == b.start.date) { 
					if (starttime != null) {
									cstarttime = starttime.split(':');
									cstarttime = cstarttime[0];
					if( Math.abs(weti - cstarttime) < 3  ) {
						temp = Math.round(g.main.temp);
										$.each(g.weather, function (z, x) {			
											weather = x.description;		
																			}) 
															} 
					} else {
					temp = Math.round(g.main.temp);
										$.each(g.weather, function (z, x) {			
											weather = x.main; return false;		
																			}) 
						
						
					}
					}
					}
					)

}}).responseText;
if (starttime == null) starttime = "Κάποια Ώρα";
if (temp != "") cel = '&#8451';
if (weather.includes("clear") || weather.includes("Clear")) {weathercl="fas fa-moon";} else if (weather.includes("rain")) {weathercl="fas fa-cloud-moon-rain"} else if (weather.includes("cloud")) {weathercl="fas fa-cloud-moon"}
if (isfavorite === "notfav") { isfavorite="far fa-heart"; } else { isfavorite="fas fa-heart";}
            if (b.type == "Concert") {
              var newname = "";
              var name = b.displayName.split(" ");
			  
              for (var i = 0; i < name.length - 3; i++)
                newname = newname + name[i] + " ";
			
              output += '<tr><td>' + newname + '</td><td class="text-nowrap">' + newDate + '<br></td><td>' + starttime + `</td><td align="center"> <i class="${weathercl}"></i><br>` +temp +`${cel} </td><td>  <button id="fav" type="button" class="btn btn-success" onclick="addfavorite(${id}, this)"> <i id="heart" class="${isfavorite}" ></i></button> </td></tr>` ;
				}
            else {
				if(b.start.date != b.end.date){
              var enddateAr = b.end.date.split('-');
              var newendDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0].slice(-2);
              output += '<tr><td>' + newname + '</td><td class="text-nowrap"> Start:' + newDate + '<br>End:' + newendDate + '<br></td><td>' + starttime + `</td><td align="center"> <i class="${weathercl}"></i>` +temp + `${cel}</td><td>  <button id="fav" type="button" class="btn btn-success" onclick="addfavorite(${id})"><i id="heart" class="${isfavorite}"></i></button> </td></tr>`;
				}
				else {
			output += '<tr><td>' + newname + '</td><td class="text-nowrap">' + newDate + '<br></td><td>' + starttime + `</td><td align="center"> <i class="${weathercl}"></i>${cel}</td>` +temp + `<td>  <button id="fav" type="button" class="btn btn-success"onclick="addfavorite(${id})"><i id="heart" class="${isfavorite}"></i></button> </td></tr>`;

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