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
    box.nextElementSibling.checked = true;
    // console.log(box.nextElementSibling.checked = "true")
  } else {
    box.className = "fa-regular fa-square forAllCheck";
    box.nextElementSibling.checked = false;
  }
};

const starToggler = (e) => {
  if (e.className == "fa-regular fa-star forAllStar") {
    e.className = "fa-solid fa-star forAllStar";
    e.nextElementSibling.checked = true;
  } else {
    e.className = "fa-regular fa-star forAllStar";
    e.nextElementSibling.checked = false;
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
      forAllCheck[i].nextElementSibling.checked = false
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
      forAllCheck[i].nextElementSibling.checked = true;
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
      forAllStar[i].nextElementSibling.checked = false;
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
      forAllStar[i].nextElementSibling.checked = true;
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

const dashboardRedirector = () => {
  window.location.assign("./2ndpage.html")
}

const patientenRedirector = () => {
  window.location.assign("./patienten.html")
}