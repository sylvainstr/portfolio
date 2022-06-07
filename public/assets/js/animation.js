const title = document.querySelector('.intro p');
const user = document.querySelector('.introduction h1');
const job = document.querySelector('.introduction h2');
const text = document.querySelector('.introduction .intro-txt');
const image = document.querySelector('.intro-img img');
const allItems = document.querySelectorAll('.main-nav li');

const leftItemFirst = document.querySelector('.left .xp-first');
const rightBoxFirst = document.querySelector('.right .xp-first');
const leftBox = document.querySelector('.left .xp-second');
const rightItemSecond = document.querySelector('.right .xp-second');
const leftItemThird = document.querySelector('.left .xp-third');
const rightBoxSecond = document.querySelector('.right .xp-third');

const formation1 = document.querySelector('.formation-card-first');
const formation2 = document.querySelector('.formation-card-second');
const formation3 = document.querySelector('.formation-card-third');

const projetImg1 = document.querySelector('.my-projects-img-security');
const projetTxt1 = document.querySelector('.my-projects-text');
const projetTxt2 = document.querySelector('.my-projects-text');
const projetImg2 = document.querySelector('.my-projects-img-ocoeur');

const TimeLine = new TimelineMax({paused: true});

TimeLine
.from(title, 1, {y: -100, opacity: 0})
.from(user, 1, {y: -100, opacity: 0})
.from(job, 1, {opacity: 0}, '-=0.4')
.from(text, 1, {opacity: 0}, '-=0.5')
.from(image, 1, {x: 100, opacity: 0}, '-=0.5')
.staggerFrom(allItems, 1, {y: -50, opacity: 0}, 0.2, '-=1')

TimeLine.play();

// Animation expérience professionnelle

let tl1 = gsap.timeline({
  scrollTrigger: {
    trigger: leftItemFirst,
  }
});
tl1.from(leftItemFirst, {x: -100, opacity: 0, duration: 2.5})

let tl2 = gsap.timeline({
  scrollTrigger: {
    trigger: rightBoxFirst,
  }
});
tl2.from(rightBoxFirst, {x: 100, opacity: 0, duration: 2.5})

let tl3 = gsap.timeline({
  scrollTrigger: {
    trigger: leftBox,
  }
});
tl3.from(leftBox, {x: -100, opacity: 0, duration: 2.5})

let tl4 = gsap.timeline({
  scrollTrigger: {
    trigger: rightItemSecond,
  }
});
tl4.from(rightItemSecond, {x: 100, opacity: 0, duration: 2.5})

let tl5 = gsap.timeline({
  scrollTrigger: {
    trigger: leftItemThird,
  }
});
tl5.from(leftItemThird, {x: -100, opacity: 0, duration: 2.5})

let tl6 = gsap.timeline({
  scrollTrigger: {
    trigger: rightBoxSecond,
  }
});
tl6.from(rightBoxSecond, {x: 100, opacity: 0, duration: 2.5})

// Animation diplômes et formations

let tlCard1 = gsap.timeline({
  scrollTrigger: {
    trigger: formation1,
  }
});
tlCard1.from(formation1, {x: 100, opacity: 0, duration: 2})


let tlCard2 = gsap.timeline({
  scrollTrigger: {
    trigger: formation2,
  }
});
tlCard1.from(formation2, {y: -100, opacity: 0, duration: 2})

let tlCard3 = gsap.timeline({
  scrollTrigger: {
    trigger: formation3,
  }
});
tlCard1.from(formation3, {x: 100, opacity: 0, duration: 2})

// Réalisations

