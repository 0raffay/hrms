// TIMELINES START
const introTimeline = gsap.timeline({
    onComplete: () => {
        sc1.play();

        var myFullpage = new fullpage("#fullpage", {
            scrollingSpeed: 700,
        });
        
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


introTimeline.to("#main", {
    display: "flex",
    delay: 0,
    duration: 0.1,
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

const sc2 = gsap.timeline({
    paused: true,
    repeat: -1,
});

function hideCard(cardSelector) {
    sc2.to(cardSelector, {
        opacity: 0,
        duration: 0.4,
        delay: 1.25, // Increase the delay to 2 seconds
    });
    sc2.set(cardSelector, {
        display: "none",
    });
}

function showCard(cardSelector) {
    sc2.to(cardSelector, {
        display: "block",
        // opacity: 1,
        duration: 0.1,
        delay: 0,
    });

    sc2.to(cardSelector, {
        opacity: 1,
        duration: 0.2,
        delay: 0,
    });
}

function cardsBackAnimation(selector) {
    sc2.from(selector, {
        opacity: 0,
        y: -120,
        x: -70,
        rotate: -12,
        // duration: 1.25,
        duration: 1,
        ease: "power2.out",
    });
}

function cardsFrontAnimation(selector) {
    sc2.from(selector, {
        opacity: 0.5,
        x: -20,
        y: 100,
        rotate: 2,
        // duration: 1.25,
        duration: 1.9,
        ease: "power2.out",
        delay: -1.5,
    });
}

// FIRST CARD
showCard(".card-pink");
cardsBackAnimation(".card-pink .cards-back");
cardsFrontAnimation(".card-pink .cards-front");
// Hide Card After Animation
hideCard(".card-pink");

// SECOND CARD
showCard(".card-light-blue");
cardsBackAnimation(".card-light-blue .cards-back");
cardsFrontAnimation(".card-light-blue .cards-front");
// Hide Card After Animation
hideCard(".card-light-blue");

// THIRD CARD
showCard(".card-purple");
cardsBackAnimation(".card-purple .cards-back");
cardsFrontAnimation(".card-purple .cards-front");
// Hide Card After Animation
hideCard(".card-purple");

// LAST CARD
showCard(".card-dark-blue");
cardsBackAnimation(".card-dark-blue .cards-back");
cardsFrontAnimation(".card-dark-blue .cards-front");
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


