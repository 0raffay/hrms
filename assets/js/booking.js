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
        calenderSliderHandler();
        $("#step3").fadeIn();
    });


    let confirmBookingButton = $("[data-confirm-booking]");
    confirmBookingButton.click(function(e) {
        e.preventDefault();
        if($(".timeContainer button").hasClass("active")) {
            $("#step3").fadeOut();
            $("#step4").fadeIn();
        }
    })
}

function calenderSliderHandler() {
    function getFutureMonths() {
        let date = new Date();
        let currentMonth = date.getMonth() + 1;

        const futureMonthsInt = [];
        const futureMonthsName = [];

        for (let month = currentMonth; month <= 12; month++) {
            futureMonthsInt.push(month);
        }

        const monthNames = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];

        futureMonthsInt.forEach((month) => {
            futureMonthsName.push(monthNames[month - 1]);
        });

        return {
            getMonthsName: function () {
                return futureMonthsName;
            },
            getMonthsNameInt: function () {
                return futureMonthsInt;
            }
        };
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

    // GETTING FUTURE MONTHS FOR THE SLIDER
    let futureMonths = getFutureMonths().getMonthsName();
    let futureMonthsIndex = getFutureMonths().getMonthsNameInt()
    monthSliderHtml = "";
    futureMonths.forEach((month, index) => {
        let card = `  <div class="monthItem fs-16 fw-700 fc-secondary-700" month-id="${futureMonthsIndex[index]}">${month}</div>`;
        monthSliderHtml += card;
    });
    $(".monthSlider").html(monthSliderHtml);

    $(".monthSlider").slick({
        arrows: true,
        nextArrow: $(".monthArr .next"),
        prevArrow: $(".monthArr .prev"),
    });

    function handleSelectDateSlider(currentMonth) {
        let year = new Date().getFullYear();
        let month = currentMonth || new Date().getMonth();
        let dateItems = getDaysWithDate(year, month);
        let todayDate = new Date().getDate();

        if ($(".dateSlider").hasClass("slick-initialized")) {
            $(".dateSlider").slick("unslick");
        }
        $(".dateSlider").html("");

        dateItems.forEach((date) => {
            let card = `
            <div class="item">
           <div class="dateItemCard">
               <div class="day">${date.day}</div>
               <div class="date">${date.date}</div>
           </div>
       </div>`;
            document.querySelector(".dateSlider").innerHTML += card;
        });

        $(".dateSlider").slick({
            // initialSlide: todayDate - 1,
            // cssEase: "linear",
            // slidesToShow: 7,
            // centerMode: true,
            // speed: 500,
            initialSlide: todayDate - 1,
            cssEase: "ease", 
            slidesToShow: 7,
            centerMode: true,
            speed: 800, 
            infinite: true,
            focusOnSelect: true, responsive: [
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                  }
                },
                {
                  breakpoint: 580,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
        });



    }
    handleSelectDateSlider();

    $(".monthSlider").on("afterChange", function (event, slick, currentSlide) {
        let slides = slick;
        let currentMonth = slides.$slides[slides.currentSlide].attributes[1].value;
        handleSelectDateSlider(currentMonth);
    });
}

$(".timeContainer button").click(function (e) {
    e.preventDefault();
    $(".timeContainer button").removeClass("active");
    $(this).addClass("active")
})

