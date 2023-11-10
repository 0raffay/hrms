$(document).ready(function () {
    check_password();

    validateSignupForm(
        {
            button: "[data-sign-up]",
            inputs: "[data-validate]",
            email: {
                regex: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/,
            },
            telephone: {
                selector: "[data-phone]",
            },
        },
        function () {
            if ($("#password").val() !== $("#setPassword").val()) {
                $("#password").addClass("error");
            } else {
                alert("Nice form was submitted.");
            }
        }
    );
});

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

    password.change(function () {
        updateProgressBar(strength);
    });

    $("#password").on("change", function () {
        if ($(this).val() !== password.val()) {
            $(this).addClass("error");
        } else {
            $(this).removeClass("error");
        }
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

        if (!passwordStrength.hasClass("progress-bar-success")) {
            password.addClass("error");
        } else {
            password.removeClass("error");
        }
    }
}

function validateSignupForm(options, action) {
    let errorClass = options.errorClass || "error";
    let disableClass = options.disableClass || "disabled";

    let isValid = false;
    let button = $(options.button);
    let inputs = $(options.inputs);

    let email = $(options.email.selector);
    let emailRegex =
        options.email.regex ||
        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    let telephone = $(options.telephone.selector);
    let telephoneRegex = options.telephone.regex || /^\d{9,}$/;

    let checkValidateType = {
        inputs: "empty",
        email: "email",
        telephone: "telephone",
    };

    function addUtilties() {
        inputs.attr("validation", checkValidateType.inputs);
        email.attr("validation", checkValidateType.email);
        telephone.attr("validation", checkValidateType.telephone);
    }
    addUtilties();

    function checkInputs(_this) {
        let isSpecial = undefined;

        function checkIfSpecialFields(input) {
            inputValidationType = input.attr("validation");
            emailValidationType = email.attr("validation");
            telephoneValidationType = telephone.attr("validation");

            if (inputValidationType == emailValidationType) {
                isSpecial = true;
                validateSpecialFields(email, emailRegex);
            } else if (inputValidationType == telephoneValidationType) {
                isSpecial = true;
                validateSpecialFields(telephone, telephoneRegex);
            } else {
                isSpecial = false;
            }
        }

        function validateSpecialFields(field, regex) {
            let fieldValue = field.val();
            let test = regex.test(fieldValue) && fieldValue !== "";
            if (!test) {
                field.addClass(errorClass);
            } else {
                field.removeClass(errorClass);
            }
        }

        if (_this) {
            checkIfSpecialFields(_this);
            if (!isSpecial) {
                if (_this.val() == "") {
                    _this.addClass(errorClass);
                } else {
                    _this.removeClass(errorClass);
                }
            }
        } else {
            inputs.each(function () {
                checkIfSpecialFields($(this));
                if (!isSpecial) {
                    if ($(this).val() == "") {
                        $(this).addClass(errorClass);
                    } else {
                        $(this).removeClass(errorClass);
                    }
                }
            });
        }
    }

    function checkErrorClass() {
        isValid = inputs
            .toArray()
            .every((input) => !$(input).hasClass(errorClass));

        if (isValid) {
            button.removeClass(disableClass);
        }
    }

    inputs.on("change", function () {
        checkInputs($(this));
        checkErrorClass();
    });

    button.on("click", function (e) {
        e.preventDefault();
        checkInputs();
        checkErrorClass();

        if (isValid) {
            action();
        } else {
            $(this).addClass(disableClass);
        }
    });
}
