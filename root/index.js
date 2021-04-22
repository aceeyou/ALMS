let innerUL = document.querySelector(".inner-ul");
let isShown = false;


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