<script>

$(document).on("mouseenter", "#fav", function(e) {
    $(this).find("i").removeClass();
	$(this).find("i").addClass("fas fa-heart");
});

$(document).on("mouseleave", "#fav", function(e) {
    $(this).find("i").removeClass();
	$(this).find("i").addClass("far fa-heart");
});
</script>