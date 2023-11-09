//SIGN UP
function check_password() {
    let password = $("#setPassword");
    let passwordStrength = $("#password-strength");
    let resultMessage = $("#result");

    let moreThan8 = $("#moreThan8");
    let oneLetter = $("#oneLetter");
    let oneNumber = $("#oneNumber");

    password.on("keyup", function () {
        let pass = $(this).val();
        console.log(oneLetter);
        checkStrength(pass);
    });

    function checkStrength(password) {
        let strength = 0;

        // If password contains both lower and uppercase characters
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
            strength += 1;
            oneLetter.prop("checked", true);
        } else {
            oneLetter.prop("checked", false);
        }

        // If it has numbers
        if (password.match(/([0-9])/)) {
            strength += 1;
            oneNumber.prop("checked", true);
        } else {
            oneNumber.prop("checked", false);
        }

        // If password is greater than 7
        if (password.length > 7) {
            moreThan8.prop("checked", true);
            strength += 1;
        } else {
            moreThan8.prop("checked", false);
        }

        // Update progress bar and result message
        updateProgressBar(strength);
    }

    function updateProgressBar(strength) {
        if (strength < 2) {
            passwordStrength
                .removeClass("progress-bar-warning progress-bar-success")
                .addClass("progress-bar-danger")
                .css("width", "10%");
            resultMessage.text("Weak Password");
        } else if (strength < 3) {
            passwordStrength
                .removeClass("progress-bar-success progress-bar-danger")
                .addClass("progress-bar-warning")
                .css("width", "60%");
            resultMessage.text("Medium Password");
        } else {
            passwordStrength
                .removeClass("progress-bar-warning progress-bar-danger")
                .addClass("progress-bar-success")
                .css("width", "100%");
            resultMessage.text("Strong Password");
        }
    }
}
check_password();

let signUpCount = 0;
$(["[data-sign-up]"]).click(function (e) {
    e.preventDefault();
    if (signUpCount == 0) {
        $(".formContainer").slideDown();
    } else {
        validateForm(
            {
                button: "[data-sign-up]",
                inputs: "[data-validate]",
                email: {
                    selector: "[data-email]",
                },
            },
            function () {
                alert("Nice form was submitted.");
            }
        );
    }
});
