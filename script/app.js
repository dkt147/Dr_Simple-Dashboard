const loginPasswordInput = document.getElementById("loginPasswordInput");


const showHideFunction = () => {
    if(loginPasswordInput.type == "password") {
        loginPasswordInput.type = "text"
    } else {
        loginPasswordInput.type = "password"
    }
};

const checkToggler = (box) => {
    if(box.className == "fa-regular fa-square") {
        box.className = "fa-solid fa-square-check"
    }
    else {
        box.className = "fa-regular fa-square"
    }

}

const starToggler = (e) => {
    if(e.className == "fa-regular fa-star") {
        e.className = "fa-solid fa-star"
    }
    else {
        e.className = "fa-regular fa-star"
    }
}