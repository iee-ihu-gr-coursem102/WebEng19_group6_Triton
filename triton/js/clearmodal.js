function clearmodal() {
$(".modal").on("hidden.bs.modal", function(){
    $("#lognform .invalid-feedback").html("");
});
}