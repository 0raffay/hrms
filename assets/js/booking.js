$(document).ready(function () {
    formInputHandler();

    let iniHit = 0;
    validateBookingForm(
        {
            button: "[data-booking-step-1]",
            inputs: "[data-validate-booking]",
            email: {
                selector: "[data-email]",
            },
            telephone: {
                selector: "[data-tel]",
                regex: /^\d{9,}$/,
            },
            errorClass: "error",
            disableClass: "disabled",
        },
        function () {
            $("#step1").fadeOut();
            $("#step2").fadeIn();
        }
    );

    popUpSwitching();

    $(".monthSlider").slick({
        arrows: true,
        nextArrow: $(".monthArr .next"),
        prevArrow: $(".monthArr .prev"),
    });
});

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
}

function validateBookingForm(options, action) {
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
        if (initalHit === 0) {
            let allFieldsFilled = true;

            $(".checkBeforeShow").each(function () {
                if ($(this).val() === "") {
                    $(this).addClass("error");
                    allFieldsFilled = false;
                }
            });

            if (allFieldsFilled) {
                $(".bookingFormSecondPart").slideDown();
                initalHit++;
            }
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

function popUpSwitching() {
    let step2SkipButton = $("[data-booking-step-2-skip]");
    let validationStep2Button = $("[data-booking-step-2]");

    step2SkipButton.click(function (e) {
        e.preventDefault();
        $("#step2").fadeOut();
        $("#step3").fadeIn();
    });

    validationStep2Button.click(function (e) {
        e.preventDefault();
        let value = $("#anythingElse").val();

        if (value == "") {
            $("#anythingElse").addClass("error");
            return;
        }
        $("#step2").fadeOut();
        $("#step3").fadeIn();
    });
}
function getDaysWithDate(year, month) {
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const days = [];

    for (let date = 1; date <= daysInMonth; date++) {
        const currentDate = new Date(year, month, date);
        const dayOfWeek = currentDate.toLocaleDateString("en-US", {
            weekday: "short",
        });

        days.push({
            day: dayOfWeek.toLowerCase(),
            date: date.toString().padStart(2, "0"),
        });
    }

    return days;
}

// Example usage:
const year = 2023;
const month = 10; // 10 represents November
const daysWithDate = getDaysWithDate(year, month);

console.log(daysWithDate);
