let innerUL = document.querySelector(".inner-ul");
let isShown = false;

let closeBtn = document.querySelector("#close-btn");


function showInnerUL() {
    let bookArrow = document.querySelector('#book-arrow');

    if(isShown){
        innerUL.style.display = 'none';
        isShown = false;
        
        bookArrow.style.transform = "rotate(360deg)";
    } else {
        innerUL.style.display = 'block';
        isShown = true;

        bookArrow.style.transform = "rotate(180deg)";
    }
}

function bookArrow() {
    if(isDown) {
        bookArrow.style.transforme = 'rotate(180deg)';
    } else {
        bookArrow.style.transform = 'rotate(0deg)';
    }
}


function openSideMenu() {
    document.querySelector("nav").style.marginLeft = "300px";
    document.querySelector("nav").style.width = "calc(100vw - 300px)";
    document.querySelector("#logo-div").style.paddingLeft = "calc(10rem - 6.25rem)";

    document.querySelector(".side-menu").style.transform = "translateX(0px)";
    document.querySelector(".side-menu").style.boxShadow = "3px 0px 13px rgba(0, 0, 0, 0.4)";
    document.querySelector(".side-menu").style.position = "fixed";
    
    document.querySelector("main").style.marginLeft = "300px";
    document.querySelector(".reports").style.width= "71rem";
    document.querySelector(".transactions").style.width = "45rem";
    document.querySelector(".new-patrons").style.width = "24rem";


    document.querySelector("#open-btn").style.display = "none";
    document.querySelector("#open-btn").style.transform = "rotate(360deg)";
    closeBtn.style.transform = "rotate(360deg)";


}

function closeSideMenu() {
    document.querySelector("nav").style.width = "100vw"
    document.querySelector("nav").style.marginLeft = "0"
    document.querySelector("#logo-div").style.paddingLeft = "10rem";
    
    document.querySelector(".side-menu").style.transform = "translateX(-300px)";
    document.querySelector(".side-menu").style.boxShadow = "0";
    
    document.querySelector("main").style.marginLeft = "0";
    document.querySelector(".reports").style.width= "81.625rem";
    document.querySelector(".transactions").style.width = "52rem";
    document.querySelector(".new-patrons").style.width = "27rem";

    document.querySelector("#open-btn").style.display = "block";
    document.querySelector("#open-btn").style.transform = "rotate(-360deg)";

    closeBtn.style.transform = "rotate(-180deg)";
}