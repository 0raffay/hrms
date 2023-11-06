$(document).ready(function () {
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


            // HANDLE FORM SUBMIT HERE:
            setTimeout(function () {
                $(".doneFormButton").removeClass("hide");
                window.location.href = window.location.href;
            }, timing * 3);
        }
    );
});

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
            // telephoneValidationType = telephone.attr("validation");

            if (inputValidationType == emailValidationType) {
                isSpecial = true;
                validateSpecialFields(email, emailRegex);
                // } else if (inputValidationType == telephoneValidationType) {
                //     isSpecial = true;
                //     validateSpecialFields(telephone, telephoneRegex);
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
$("#change").click(function () {
    let screenItems = $(".screenBasic");
    let activeIndex = screenItems.index($(".screenBasic.active"));
    screenItems.eq(activeIndex).removeClass("active");
    activeIndex = (activeIndex + 1) % screenItems.length;
    screenItems.eq(activeIndex).addClass("active");
});
