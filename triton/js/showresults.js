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
        console.log(data);
        // d=$.parseJSON(JSON.stringify(data));
        //console.log(d);
        var output;
        $.each(data, function (i, e) {
          console.log("2");
          output += '<tr><td>' + e + '' + '</td><td>' + e + '</td></tr>';
          console.log("1");
        });

        $('#resulttable').append(output);
      }
    });
    return false;
  });
});