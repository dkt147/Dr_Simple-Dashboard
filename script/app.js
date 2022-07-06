const loginPasswordInput = document.getElementById("loginPasswordInput");

const showHideFunction = () => {
  if (loginPasswordInput.type == "password") {
    loginPasswordInput.type = "text";
  } else {
    loginPasswordInput.type = "password";
  }
};

const checkToggler = (box) => {
  if (box.className == "fa-regular fa-square forAllCheck") {
    box.className = "fa-solid fa-square-check forAllCheck";
  } else {
    box.className = "fa-regular fa-square forAllCheck";
  }
};

const starToggler = (e) => {
  if (e.className == "fa-regular fa-star forAllStar") {
    e.className = "fa-solid fa-star forAllStar";
  } else {
    e.className = "fa-regular fa-star forAllStar";
  }
};

let counter = 0;
let counter2 = 12;
const monthChanger = (element, key) => {
  months = [
    "Juni",
    "Juli",
    "August",
    "September",
    "Oktober",
    "November",
    "Dezember",
    "Januar",
    "Februar",
    "März",
    "April",
    "Mai",
  ];
  if (key == 1) {
    counter++;
    console.log(counter);

    element.previousElementSibling.innerHTML = months[counter];
    if (counter == 11) {
      counter = -1;
    }
  }
  if (key == 0) {
    counter2--;
    console.log(counter2);
    element.nextElementSibling.innerHTML = months[counter2];
    if (counter2 == 0) {
      counter2 = 12;
    }
  }
};

var forAllCheck = document.getElementsByClassName("forAllCheck");
const allCheckToggler = (e) => {
  if (e.className == "fa-solid fa-square-check") {
    e.className = "fa-regular fa-square";
    for (let i = 0; i < forAllCheck.length; i++) {
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
      forAllCheck[i].className = "fa-regular fa-square forAllCheck";
    }
  } else {
    e.className = "fa-solid fa-square-check";
    for (let i = 0; i < forAllCheck.length; i++) {
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
      forAllCheck[i].className = "fa-solid fa-square-check forAllCheck";
    }
  }
};

var forAllStar = document.getElementsByClassName("forAllStar");
const allStarToggler = (s) => {
  if (s.className == "fa-solid fa-star") {
    s.className = "fa-regular fa-star";
    for (let i = 0; i < forAllCheck.length; i++) {
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
      forAllStar[i].className = "fa-regular fa-star forAllStar";
    }
  } else {
    s.className = "fa-solid fa-star";
    for (let i = 0; i < forAllCheck.length; i++) {
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
      forAllStar[i].className = "fa-solid fa-star forAllStar";
    }
  }
};
