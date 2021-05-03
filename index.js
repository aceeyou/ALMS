let innerUL = document.querySelector(".inner-ul");
let isShown = false;

let closeBtn = document.getElementById("close-btn");
let openBtn = document.getElementById("open-btn");

window.addEventListener('load', () => {
    openSideMenu();
});

function hideBtn(){
    openBtn.style.visibility = "hidden";
}

function showBtn() {
    openBtn.style.visibility = "visible";
}


function openSideMenu() {
    document.querySelector("nav").style.marginLeft = "300px";
    document.querySelector("nav").style.width = "calc(100vw - 300px)";
    document.querySelector("#logo-div").style.paddingLeft = "calc(10rem - 6.25rem)";

    document.querySelector(".side-menu").style.transform = "translateX(0px)";
    document.querySelector(".side-menu").style.boxShadow = "3px 0px 13px rgba(0, 0, 0, 0.4)";
    document.querySelector(".side-menu").style.position = "fixed";
    document.querySelector(".side-menu").style.transition = "500ms";
    
    document.querySelector("main").style.marginLeft = "300px";
    document.querySelector(".reports").style.width= "71rem";
    document.querySelector(".transactions").style.width = "45rem";
    document.querySelector(".new-patrons").style.width = "24rem";
    document.querySelector(".edit-form").style.marginLeft = "300px";

    hideBtn();
    closeBtn.style.transform = "rotate(360deg)";

}

function closeSideMenu() {
    document.querySelector("nav").style.width = "100vw"
    document.querySelector("nav").style.marginLeft = "0"
    document.querySelector("#logo-div").style.paddingLeft = "10rem";
    
    document.querySelector(".side-menu").style.transform = "translateX(-300px)";
    document.querySelector(".side-menu").style.boxShadow = "0";
    
    document.querySelector("main").style.marginLeft = "0";
    document.querySelector("main").style.transition = "500ms";
    document.querySelector(".reports").style.width= "81.625rem";
    document.querySelector(".transactions").style.width = "52rem";
    document.querySelector(".new-patrons").style.width = "25rem";
    document.querySelector(".edit-form .book-form-container").style.marginLeft = "0";


    showBtn();
    document.querySelector("#open-btn-dashb").style.display = "none";
    closeBtn.style.transform = "rotate(-180deg)";
}


function openDeletePrompt() {
    document.querySelector("main").style.opacity = "0.2";

    document.querySelector("body").style.overflowY = "hidden";

    let deleteprompt = document.querySelector(".delete-prompt");

    deleteprompt.style.visibility = "visible";  
    deleteprompt.addEventListener('mousemove', (e) => {
        e.preventDefault();
    });
}

function closeDeletePrompt() {
    document.querySelector("main").style.opacity = "1";
    document.querySelector(".delete-prompt").style.visibility = "hidden";
    document.querySelector("body").style.overflowY = "scroll";
}
