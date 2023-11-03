// TIMELINES START
const introTimeline = gsap.timeline({
    onComplete: () => {
        blockMousewheel = false;
        sc1.play();
    },
});

gsap.set(".setHeadingTranslate, .dot", {
    opacity: 0,
    display: "block",
    y: -10,
});

gsap.set(".dot", {
    x: 50,
});

introTimeline.to(".introLoader", {
    opacity: 1,
    y: 20,
    duration: 1,
});

introTimeline.to(".introLoader", {
    delay: 0,
    scale: 0.8,
    rotation: 500,
    duration: 0.7,
});

introTimeline.to(".introLoader", {
    delay: 0.5,
    opacity: 0,
    display: "none",
});

introTimeline.to(".introHeadingContainer", {
    display: "block",
});

introTimeline.to(".heading-1", {
    opacity: 1,
    y: 0,
    stagger: 0.2,
});

introTimeline.to({}, { duration: 0.2 });

introTimeline.to(".heading-2", {
    opacity: 1,
    y: 0,
    stagger: 0.2,
});

introTimeline.to(".dot", {
    opacity: 1,
    x: 0,
    y: 0,
});

introTimeline.to(".scrollButtonWrapper", {
    opacity: 1,
    y: 20,
});

// introTimeline.to("#introMain", {
//     opacity: "0",
//     duration: 0.5,
// });

introTimeline.to("#main", {
    display: "block",
    delay: 0,
    duration: .1,
});
introTimeline.play();

const sc1 = gsap.timeline({
    paused: true,
    onComplete: () => {
        setTimeout(function () {
            $(".screenBasic").removeClass("active");
            $(".screen-2").addClass("active");

            sc2.play();
        }, 1000);
    },
});

sc1.from(".mainImg", {
    opacity: 0,
    y: -30,
    duration: 1,
});

sc1.from(".secondImg img", {
    opacity: 0,
    x: -50,
    y: -20,
    duration: 0.5,
});
sc1.from(".fourthImage img", {
    opacity: 0,
    x: 50,
    y: 20,
    duration: 0.5,
});

sc1.from(".thirdImage img", {
    opacity: 0,
    x: -50,
    y: -20,
    duration: 0.5,
});
sc1.from(".fifthImage img", {
    opacity: 0,
    x: 50,
    y: 20,
    duration: 0.5,
});

//? SCREEN 2
const sc2 = gsap.timeline({
    paused: true,
    repeat: -1,
});

function hideCard(cardSelector) {
    sc2.to(cardSelector, {
        opacity: 0,
        duration: 0.2,
    });
    sc2.set(cardSelector, {
        clearProps: "all", // Clear all properties after hiding
    });
}

function showCard(cardSelector) {
    sc2.to(cardSelector, {
        display: "block",
        opacity: 1, // Set opacity to 1 to make it visible
        duration: 0.1,
        delay: 0,
    });
}

// FIRST CARD
showCard(".card-pink");

sc2.from(".card-pink .cards-back", {
    opacity: 0,
    y: -80,
    x: -50,
    rotate: -12,
    duration: 1.5,
    ease: "power2.out",
});

sc2.from(".card-pink .cards-front", {
    opacity: 0,
    duration: 1.5,
    ease: "power2.out",
    delay: -1.3,
});

// Hide Card After Animation
hideCard(".card-pink");

// SECOND CARD
showCard(".card-light-blue");

sc2.from(".card-light-blue .cards-back", {
    opacity: 0,
    y: -80,
    x: -50,
    rotate: -12,
    duration: 1.5,
    ease: "power2.out",
});

sc2.from(".card-light-blue .cards-front", {
    opacity: 0,
    duration: 1.5,
    ease: "power2.out",
    delay: -1.3,
});

// Hide Card After Animation
hideCard(".card-light-blue");

// THIRD CARD
showCard(".card-purple");

sc2.from(".card-purple .cards-back", {
    opacity: 0,
    y: -80,
    x: -50,
    rotate: -12,
    duration: 1.5,
    ease: "power2.out",
});

sc2.from(".card-purple .cards-front", {
    opacity: 0,
    duration: 1.5,
    ease: "power2.out",
    delay: -1.3,
});

// Hide Card After Animation
hideCard(".card-purple");

// LAST CARD
showCard(".card-dark-blue");

sc2.from(".card-dark-blue .cards-back", {
    opacity: 0,
    y: -80,
    x: -50,
    rotate: -12,
    duration: 1.5,
    ease: "power2.out",
});

sc2.from(".card-dark-blue .cards-front", {
    opacity: 0,
    duration: 1.5,
    ease: "power2.out",
    delay: -1.3,
});

// Hide Card After Animation
hideCard(".card-dark-blue");

//?SCREEN 2 END

//TIMELINE END

const canvas = document.getElementById("rotatingCircles");
const ctx = canvas.getContext("2d");
const numCircles = 13;
const size = 2200;
const dashLength = 3;

canvas.width = size;
canvas.height = size;

for (let i = numCircles; i >= 1; i--) {
    const circleSize = size * (i / numCircles);
    const centerX = size / 2;
    const centerY = size / 2;

    ctx.beginPath();
    ctx.arc(centerX, centerY, circleSize / 2, 0, 2 * Math.PI);
    ctx.strokeStyle = "#FFF";
    ctx.lineWidth = 1;

    ctx.setLineDash([dashLength]);

    ctx.stroke();
}

//RANDOM MOVING OBJECTS:
var tl = gsap.timeline().to(".randomMovement", {
    x: "random(-20, 20, 5)",
    y: "random(-20, 10, 3)",
    duration: 1,
    ease: "none",
    repeat: -1,
    repeatRefresh: true,
});
$(document).ready(function () {
    var scrolling = false;

    function scrollToSection(section) {
        scrolling = true;
        $("html, body").animate(
            {
                scrollTop: $(section).offset().top,
            },
            200,
            function () {
                scrolling = false;
            }
        );
    }

    $(window).on("wheel", function (e) {
        if (!scrolling) {
            if (e.originalEvent.deltaY > 100) {
                scrollToSection("#main");
            }
        }
    });
});
var myFullpage = new fullpage("#fullpage", {
    scrollingSpeed: 50,
    // dropEffect: false,
    // easing: 'linear',
});
