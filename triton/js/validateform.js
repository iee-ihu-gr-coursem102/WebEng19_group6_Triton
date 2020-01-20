function validatelogin() {
        var $valid = true;
        document.getElementById("userinfo").innerHTML = "";
        document.getElementById("passinfo").innerHTML = "";
        
        var userName = document.getElementById("lusername").value;
        var password = document.getElementById("lpassword").value;
        if(userName == "") 
        {
            document.getElementById("userinfo").innerHTML = "Συμπλήρωσε username";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("passinfo").innerHTML = "Συμπλήρωσε password";
            $valid = false;
        }
        return $valid;
    }
	
function validateregister() {
        var $valid = true;
        document.getElementById("regfname").innerHTML = "";
        document.getElementById("reglname").innerHTML = "";
		document.getElementById("regpass").innerHTML = "";
        document.getElementById("regconfpass").innerHTML = "";
		document.getElementById("regemail").innerHTML = "";
        document.getElementById("reguname").innerHTML = "";
        
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
		var pass = document.getElementById("pass").value;
        var confpass = document.getElementById("confpass").value;
		var uname = document.getElementById("uname").value;
		var email = document.getElementById("email").value;
		
		
        if(fname == "") 
        {
            document.getElementById("regfname").innerHTML = "Συμπλήρωσε Όνομα";
        	$valid = false;
        }
        if(lname == "") 
        {
        	document.getElementById("reglname").innerHTML = "Συμπλήρωσε Επώνυμο";
            $valid = false;
        }
		if(pass == "") 
        {
        	document.getElementById("regpass").innerHTML = "Συμπλήρωσε Κωδικό";
            $valid = false;
        }
		if(confpass == "") 
        {
        	document.getElementById("regconfpass").innerHTML = "Συμπλήρωσε Επιβεβαίωση κωδικού";
            $valid = false;
        }
		else
		{
			var password = document.getElementById("pass")
  , confirm_password = document.getElementById("confpass");
  if(password.value != confirm_password.value) {
    document.getElementById("regconfpass").innerHTML = "Οι κωδικοί δεν ταιριάζουν";
  }

			
		}
		if(uname == "") 
        {
        	document.getElementById("reguname").innerHTML = "Συμπλήρωσε Όνομα Χρήστη";
            $valid = false;
        }
		if(email == "") 
        {
        	document.getElementById("regemail").innerHTML = "Συμπλήρωσε email";
            $valid = false;
        }		
        return $valid;
		
}

    