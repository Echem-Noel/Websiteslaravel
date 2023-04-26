var navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right = "0";
}

function hideMenu(){
    navLinks.style.right = "-200px";
}

function sendEmail(){
    Email.send({
    SecureToken : "83436a74-e17c-472c-8dae-a2525cbbfb85",
    To : 'bunarodericka@gmail.com',
    From : 'bunarodericka@gmail.com',
    Subject : "New Contact Form Inquiry",
    Body : "Name: " + document.getElementById("name").value
        + "<br> Email: " + document.getElementById("email").value
        + "<br> Phone no: " + document.getElementById("phone").value
        + "<br> Message: " + document.getElementById("message").value
    }).then(
    message => alert("Message Sent Succesfully")
);
}
