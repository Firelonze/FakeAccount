var attempts = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if ( username == "Formget" && password == "formget#123")
    {
        alert ("Login successfully");
        window.location = "Untitled-1.html"; // Redirecting to other page.
        return false;
    }
    else
    {
        attempts --;// Decrementing by one.
        alert("You have left "+attempts+" attempts;");
        // Disabling fields after 3 attempts.
        if( attempts <= 0)
        {
            document.getElementById("password").disabled = true;
            return false;
        }
    }
}