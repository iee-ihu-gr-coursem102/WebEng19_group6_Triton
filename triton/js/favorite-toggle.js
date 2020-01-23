$(document).on("click", "#fav", function() {
	if ($(this).find("i").hasClass("far fa-heart")){ 
    $(this).find("i").removeClass();
	$(this).find("i").addClass("fas fa-heart");}
	else { 
	$(this).find("i").removeClass();
	$(this).find("i").addClass("far fa-heart"); }
});
