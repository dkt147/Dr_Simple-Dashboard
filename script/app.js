const loginPasswordInput = document.getElementById("loginPasswordInput");


const showHideFunction = () => {
    if(loginPasswordInput.type == "password") {
        loginPasswordInput.type = "text"
    } else {
        loginPasswordInput.type = "password"
    }
};
