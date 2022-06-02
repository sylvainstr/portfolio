const allCards = document.querySelectorAll('.skill-card-first, .skill-card-second, .skill-card-third');
const cardFirst = document.querySelector('.skill-card-first');
const cardSecond = document.querySelector('.skill-card-second');
const cardThird = document.querySelector('.skill-card-third');

allCards.forEach(card => {
  card.addEventListener("mouseover", addActiveCard);
  card.addEventListener("mouseout", removeActiveCard);
})


function addActiveCard(e) {

  const card = e.target;
  var result = cardFirst.classList.contains("active-card");

  if (result) {
    cardFirst.classList.remove('active-card');
    cardFirst.style.transition = "ease-in-out 0.5s";
  }
  
  card.classList.add('active-card');
  card.style.transition = "ease-in-out 0.5s";

}

function removeActiveCard(e) {

  const card = e.target;
  card.classList.remove('active-card');
  card.style.transition = "ease-in-out 0.5s";

}

