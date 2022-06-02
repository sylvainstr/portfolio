const title = document.querySelector('.intro p');
const user = document.querySelector('.introduction h1');
const job = document.querySelector('.introduction h2');
const text = document.querySelector('.introduction .intro-txt');
const image = document.querySelector('.intro-img img');
const allItems = document.querySelectorAll('.main-nav li');

const TimeLine = new TimelineMax({paused: true});

TimeLine
.from(title, 1, {y: -100, opacity: 0})
.from(user, 1, {y: -100, opacity: 0})
.from(job, 1, {opacity: 0}, '-=0.4')
.from(text, 1, {opacity: 0}, '-=0.5')
.from(image, 1, {x: 100, opacity: 0}, '-=0.5')
.staggerFrom(allItems, 1, {y: -50, opacity: 0}, 0.2, '-=1')

TimeLine.play();
