$(document).ready(function () {
    var screen1HideTimeline;
    check_password();

    //SCREEN 1 FORM
    validateSignupForm(
        {
            button: "[data-sign-up]",
            inputs: "[data-validate]",
            email: {
                selector: "[data-email]",
            },
            telephone: {
                selector: "[data-phone]",
            },
        },
        function () {
            if (!$("#password-strength").hasClass("progress-bar-success")) {
                $("#setPassword").addClass("error");
                return;
            }
            if ($("#password").val() !== $("#setPassword").val()) {
                $("#password").addClass("error");
                $(".passError").show();
                return;
            }

            $("#setPassword").removeClass("error");

            $("#password").removeClass("error");

            $(".passError").hide();

            screen1HideTimeline = fadeInOut(".screen-1", ".screen-2", 0.3);
            screen1HideTimeline.play();
            let swtich = switchScreens();
            swtich.play();
        }
    );
    formInputHandler();

    let backButton = $("[data-go-to-sc1]");
    backButton.click(function () {
        screen1HideTimeline.reverse();
       
    });

    validateUserInfoForm(
        {
            button: "[data-submit-user-info]",
            inputs: "[data-validate-user]",
            errorClass: "error",
            disableClass: "disabled",
        },
        function () {
            alert("nice");
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
        checkStrength(pass);
        if (passwordStrength.hasClass("progress-bar-success")) {
            password.removeClass("error");
        } else {
            password.addClass("error");
        }
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

    $(".showPass").click(function (e) {
        e.preventDefault();
        var passwordInput = $("#password");
        var passwordFieldType = passwordInput.attr("type");

        if (passwordFieldType === "password") {
            passwordInput.attr("type", "text");
            $(this).addClass("active");
        } else {
            passwordInput.attr("type", "password");
            $(this).removeClass("active");
        }
    });

    function updateProgressBar(strength) {
        if (strength < 2) {
            passwordStrength
                .removeClass("progress-bar-warning progress-bar-success")
                .addClass("progress-bar-danger")
                .css("width", "10%");
        } else if (strength < 3) {
            passwordStrength
                .removeClass("progress-bar-success progress-bar-danger")
                .addClass("progress-bar-warning")
                .css("width", "60%");
        } else {
            passwordStrength
                .removeClass("progress-bar-warning progress-bar-danger")
                .addClass("progress-bar-success")
                .css("width", "100%");
        }
    }
}

function validateSignupForm(options, action) {
    let initalHit = 0;

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

        if (initalHit == 0) {
            let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            let emailValue = $("[data-email]").val();
            if (!regex.test(emailValue) || emailValue === "") {
                $("[data-email]").addClass("error");
                return;
            }
            $(".signupFormTestimonialSlider").slick({
                dots: true,
                arrow: false,
                slidesToShow: 1,
                arrows: false,
            });
            $(".onClickShow").slideDown();
            initalHit++;
        } else {
            checkInputs();
            checkErrorClass();

            if (isValid) {
                action();
            } else {
                $(this).addClass(disableClass);
            }
        }
    });
}

function fadeInOut(fadeOutElement, fadeInElement, duration) {
    let timeline = gsap.timeline();

    timeline.to(fadeOutElement, {
        opacity: 0,
        duration: duration,
        delay: 0,
    });

    timeline.to(fadeOutElement, {
        display: "none",
        duration: 0,
        delay: 0,
    });

    timeline.to(fadeInElement, {
        display: "block",
        duration: 0,
        delay: 0,
    });

    timeline.to(fadeInElement, {
        duration: duration,
        opacity: 1,
    });

    return timeline;
}

function formInputHandler() {
    let inputs = $(".custom-inputs input");

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

function validateUserInfoForm(options, action) {
    let errorClass = options.errorClass || "error";
    let disableClass = options.disableClass || "disabled";

    let isValid = false;
    let button = $(options.button);
    let inputs = $(options.inputs);

    function checkInputs(_this) {
        if (_this) {
            if (_this.val() == "") {
                _this.addClass(errorClass);
            } else {
                _this.removeClass(errorClass);
            }
        } else {
            inputs.each(function () {
                if ($(this).val() == "") {
                    $(this).addClass(errorClass);
                } else {
                    $(this).removeClass(errorClass);
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

// function switchScreens() {
//     let len = $('.switchingScreen').length;
//     let screenElements = $(".switchingScreen");

//     for (let i = 0; i < len - 1; i++) {
//         console.log("working");

//         setTimeout(function () {
//             console.log("working in timeout");
//             screenElements.eq(i).removeClass("active");
//             screenElements.eq(i + 1).addClass("active");
//         }, i * 700);  // Adjust the delay based on the iteration
//     }
// }

function switchScreens() {
    let screenElements = $(".switchingScreen");
    let len = screenElements.length;

    let timeline = gsap.timeline();

    for (let i = 0; i < len - 1; i++) {
        timeline.to(screenElements[i], { x: "-100%", duration: 0.7, ease: "power2.inOut" }, i * 0.7);
        timeline.set(screenElements[i], { display: "none" }, "+=0.7");
    }

    timeline.fromTo(screenElements[len - 1], { x: "100%", display: "block" }, { x: "0%", duration: 0.7, ease: "power2.inOut" }, len * 0.7);

    return timeline;
}
