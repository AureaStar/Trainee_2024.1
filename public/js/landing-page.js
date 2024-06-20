const cposts = document.querySelector(".c-posts");
const firstPost = document.querySelectorAll(".post-mobile")[0];
const arrows = document.querySelectorAll(".carousel i");

let firstPostWidth = firstPost.clientWidth;

arrows.forEach(arrow => {
    arrow.addEventListener("click", () => {
        cposts.scrollLeft += arrow.id == "arrow-left" ? -firstPostWidth : firstPostWidth;
    });
});

let boolSwipeStart = false, prevPageX, prevSwipeLeft, positionDiff;

const autoCentral = () => {
    if (cposts.scrollLeft == (cposts.scrollWidth - cposts.clientWidth)) return;

    positionDiff = Math.abs(positionDiff);
    let firstPostWidth = firstPost.clientWidth;
    let valDiff = firstPostWidth - positionDiff;

    if (cposts.scrollLeft > prevSwipeLeft){
        return cposts.scrollLeft += positionDiff > firstPostWidth / 3 ? valDiff : -positionDiff;
    }
    cposts.scrollLeft -= positionDiff > firstPostWidth / 3 ? valDiff : -positionDiff;
}


const swipeStart = (e) => {
    boolSwipeStart = true;
    prevPageX = e.touches[0].pageX;
    prevSwipeLeft = cposts.scrollLeft;
}

const swiping = (e) =>{
    if (!swipeStart) return;
    positionDiff = e.touches[0].pageX - prevPageX;
    cposts.scrollLeft = prevSwipeLeft - positionDiff;
    /*showHideIcons();*/
}

const swipeStop = () =>{
    boolSwipeStart = false;
    autoCentral();
}


cposts.addEventListener("touchstart", swipeStart);
cposts.addEventListener("touchmove", swiping);
cposts.addEventListener("touchend", swipeStop);

//Função de scrollar pra baixo

function AboutUs(){
    window.scroll({
        top: 1300,
        left: 0,
        behavior: "smooth",
      });
}

function Redirect(form){
    form.submit();
}