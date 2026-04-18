function validateForm() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let mobile = document.getElementById("mobile").value;

    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    let mobilePattern = /^[0-9]{10}$/;

    if (!email.match(emailPattern)) {
        alert("Enter valid email");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters");
        return false;
    }

    if (!mobile.match(mobilePattern)) {
        alert("Enter valid mobile number");
        return false;
    }

    return true;
}