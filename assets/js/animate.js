//INTRO START

const introTimeline = gsap.timeline({
    onComplete: () => {
        setTimeout(() => {
            document.querySelector(".introWrapper").style.display = "none";
        }, 500);

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

introTimeline.to("#introMain", {
    opacity: "0",
    duration: 0.5,
});

// Start the animation
introTimeline.play();

//INTRO END

//SCREEN-1

const sc1 = gsap.timeline({
    pause: true,
});

let sc1Images = document.querySelectorAll(".screen-1-img img");
sc1Images.forEach(function (img) {
    gsap.set(img, {
        opacity: 0,
    });
});

sc1.to({}, { duration: 1 });

sc1.to(".mainImg img", {
    delay: 2,
    duration: 1,
    opacity: 1,
    stagger: .5,
});
sc1.to(".secondImg img, .fourthImage img", {
    opacity: 1,
    duration: 2,
});
sc1.to(".thirdImage img , .fifthImage img", {
    opacity: 1,
    duration: 3,
});
