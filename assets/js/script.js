$(document).ready(function () {
    //LOGIN
    formInputHandler();
    validateForm(
        {
            button: "[form-submit]",
            inputs: "[data-validate]",
            email: {
                selector: "[data-email]",
            },
        },
        function () {
            let timing = 1000;
            $(".mainFormButton").addClass("hide");
            $(".loadingFormButton").removeClass("hide");
            setTimeout(function () {
                $(".loadingFormButton").addClass("hide");
                $(".doneFormButton").removeClass("hide");
            }, timing * 2);
            setTimeout(function () {
                $(".screenBasic").removeClass("active");
                $(".error-screen").removeClass("superActive");
                $(".loader-screen").addClass("active");

                setTimeout(function () {
                    const rocket = document.getElementById("rocketImage");
                    gsap.to(rocket, {
                        x: 1920,
                        y: -600,
                        duration: 3,
                        ease: Power4.easeOut,
                    });
                    const rocket2 = document.getElementById("rocketImage2");
                    gsap.to(rocket2, {
                        x: 500,
                        y: -400,
                        duration: 3,
                        ease: Power4.easeOut,
                    });
                }, 500);
            }, timing);

            setTimeout(function () {
                $(".doneFormButton").removeClass("hide");
                // HANDLE FORM SUBMIT HERE:
                window.location.href = window.location.href;
                // HANDLE FORM SUBMIT HERE:
            }, timing * 3);
        }
    );

    function validateForm(options, action) {
        let errorClass = options.errorClass || "error";
        let disableClass = options.disableClass || "disabled";

        let isValid = false;
        let button = $(options.button);
        let inputs = $(options.inputs);

        let email = $(options.email.selector);
        let emailRegex =
            options.email.regex ||
            /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        let checkValidateType = {
            inputs: "empty",
            email: "email",
        };

        function addUtilties() {
            inputs.attr("validation", checkValidateType.inputs);
            email.attr("validation", checkValidateType.email);
        }
        addUtilties();

        function checkInputs(_this) {
            let isSpecial = undefined;

            function checkIfSpecialFields(input) {
                inputValidationType = input.attr("validation");
                emailValidationType = email.attr("validation");

                if (inputValidationType == emailValidationType) {
                    isSpecial = true;
                    validateSpecialFields(email, emailRegex);
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
                $(".screenBasic").removeClass("active");
                $(".error-screen").addClass("superActive");
            }
        });
    }

    function formInputHandler() {
        let inputs = $(".cus-inputs input");

        function checkText(_this) {
            let thisText = _this.val();
            if (thisText !== "") {
                _this.addClass("hasText");
            } else {
                _this.removeClass("hasText");
            }
        }

        inputs.focus(function () {
            checkText($(this));
        });

        inputs.blur(function () {
            checkText($(this));
        });

        inputs.on("input", function () {
            checkText($(this));
        });

        $(".showPassButton").click(function (e) {
            e.preventDefault();
            const passwordInput = $("input#password");
            const parent = passwordInput.closest(".cus-inputs");
            const isVisible = passwordInput.attr("type") === "text";
            if (isVisible) {
                passwordInput.attr("type", "password");
                parent.removeClass("active");
                $(this).removeClass("active");
            } else {
                passwordInput.attr("type", "text");
                parent.addClass("active");
                $(this).addClass("active");
            }
        });
    }

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
        if (signUpCount == 0) {
            $(".formContainer").slideDown();
            e.preventDefault();
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
  
});
