function seePassword() {
    const passwordField = document.querySelector("#passwordField");

    if (passwordField.type === "password") {
        passwordField.type = 'text';
    } else {
        passwordField.type = "password"
    }
}

function seeConfirmPassword() {
    const confirmPasswordField = document.querySelector("#confirmPasswordField");

    if (confirmPasswordField.type === "password") {
        confirmPasswordField.type = 'text';
    } else {
        confirmPasswordField.type = "password"
    }
}