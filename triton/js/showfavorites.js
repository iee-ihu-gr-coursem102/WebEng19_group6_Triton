$('#favs').on('click', function () {
$.ajax({ url: './php/showfavorites.php',
         type: 'post',
         success: function(data) {
			 $('#showfav').html(data);
         }
        })
})