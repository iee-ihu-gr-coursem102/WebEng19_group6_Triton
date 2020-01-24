function addfavorite(id, ele){
	var id=id;

jQuery(function () {
	$ele = ele;
	var text = $(ele).parent().siblings().eq(0).text();
	var date = $(ele).parent().siblings().eq(1).text();
	var myclass = $(ele).find("i").attr('class');
    $.ajax({
	  type: 'POST',
      url: './php/favorites.php', 
      data:{myclass:myclass , id:id, text:text, date:date},
      success: function (data) {
	  }
    });
    return false;

});
}