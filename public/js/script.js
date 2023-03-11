const btnClose = document.getElementById("close-btn");
const modal = document.getElementById("modal-form");
const tabSignIn = document.getElementById("btnSignIn");
const tabSignUp = document.getElementById("btnSignUp");

const btnSignIn = document.getElementById("login-button");
const btnSignUp = document.getElementById("sign-up-button");


const signInContent = document.getElementById("sign-in");
const signUpContent = document.getElementById("sign-up");

btnClose.onclick = function() {
    modal.style.display = "none";
}

btnSignIn.onclick = function() {
    signIn();
}

btnSignUp.onclick = function() {
    signUp();
}
signIn();

function reset() {
    const content = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < 2; i++) {
        content[i].style.display = "none";
    }

    const btnTab = document.getElementsByClassName("tab-link");
    for (var i = 0; i < 2; i++) {
        btnTab[i].classList.remove("active");
    }
    modal.style.display = "block";
}

function signIn() {
    reset();
    signInContent.style.display = "block";
    tabSignIn.classList.add("active");
}

function signUp() {
    reset();
    signUpContent.style.display = "block";
    tabSignUp.classList.add("active");
}

tabSignIn.onclick = function() {
    signIn();

}

tabSignUp.onclick = function() {
    signUp();
}