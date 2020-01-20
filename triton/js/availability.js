function checkemailAvailability() {

jQuery.ajax({
url: "php/check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);

},
error:function (){}
});
}

function checkusernameAvailability() {
jQuery.ajax({
url: "php/check_availability.php",
data:'uname='+$("#uname").val(),
type: "POST",
success:function(data){
$("#username-availability-status").html(data);
},
error:function (){}
});
}