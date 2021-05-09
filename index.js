let innerUL = document.querySelector(".inner-ul");
let isShown = false;

let isOpen;
let isTrue = localStorage["isOpen"];
isOpen = isTrue;
console.log(isOpen);

let closeBtn = document.getElementById("close-btn");

window.addEventListener("load", () => {
  if(isOpen){
    openSideMenu();
  } else {
    closeSideMenu();
  }
});


function openSideMenu() {
  isOpen = true;
  localStorage["isOpen"] = isOpen;
  console.log(isOpen);


  document.querySelector("nav").style.marginLeft = "300px";
  document.querySelector("nav").style.width = "calc(100vw - 300px)";
  document.querySelector("#logo-div").style.paddingLeft =
    "calc(10rem - 6.25rem)";
  document.querySelector('.search-input').style.width = "25rem";

  document.querySelector(".side-menu").style.transform = "translateX(0px)";
  document.querySelector(".side-menu").style.boxShadow =
    "3px 0px 13px rgba(0, 0, 0, 0.4)";
  document.querySelector(".side-menu").style.position = "fixed";
  document.querySelector(".side-menu").style.transition = "500ms";

  document.querySelector("main").style.marginLeft = "300px";
  document.querySelector(".reports").style.width = "71rem";
  document.querySelector(".transactions").style.width = "45rem";
  document.querySelector(".new-patrons").style.width = "24rem";
  document.querySelector(".edit-form").style.marginLeft = "300px";

  document.querySelector("footer").style.marginLeft = "300px";
  document.querySelector("footer").style.width = "calc(99vw - 300px)";

}

function closeSideMenu() {
  isOpen = false;
  localStorage["isOpen"] = isOpen;
  console.log(isOpen);


  document.querySelector("nav").style.width = "100vw";
  document.querySelector("nav").style.marginLeft = "0";
  document.querySelector("#logo-div").style.paddingLeft = "10rem";
  document.querySelector('.search-input').style.width = "32rem";


  document.querySelector(".side-menu").style.transform = "translateX(-300px)";
  document.querySelector(".side-menu").style.boxShadow = "0";

  document.querySelector("main").style.marginLeft = "0";
  document.querySelector("main").style.transition = "500ms";
  document.querySelector(".reports").style.width = "81.625rem";
  document.querySelector(".transactions").style.width = "52rem";
  document.querySelector(".new-patrons").style.width = "25rem";
  document.querySelector(".edit-form .book-form-container").style.marginLeft =
    "0";

  document.querySelector("footer").style.marginLeft = "0";
  document.querySelector("footer").style.width = "99vw";

  document.querySelector("#open-btn-dashb").style.display = "none";
}

function openDeletePrompt(el) {
  console.log(el.value);
  document.getElementsByName("confirmDelete")[0].value = el.value;

  document.querySelector("main").style.opacity = "0.2";

  document.querySelector("body").style.overflowY = "hidden";

  let deleteprompt = document.querySelector(".delete-prompt");

  deleteprompt.style.visibility = "visible";
  deleteprompt.addEventListener("mousemove", (e) => {
    e.preventDefault();
  });
}

function closeDeletePrompt() {
  document.querySelector("main").style.opacity = "1";
  document.querySelector(".delete-prompt").style.visibility = "hidden";
  document.querySelector("body").style.overflowY = "scroll";
}

// takes input from search bar
// then places the input to the localstrage to 
// be able other pages to fetch the input
document.querySelector(".search-input").addEventListener('keydown', function (e) {
  var value = this.value;
    if ((e.code === 'Enter' || e.code === 'NumpadEnter') && value) {
        console.log(value);
        document.querySelector('.search-input').value = '';
        localStorage["value"] = value;
        window.location = "search.html";
      }
});