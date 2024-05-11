const cposts = document.querySelector(".c-posts");
const firstPost = document.querySelectorAll(".post-mobile")[0];
const arrows = document.querySelectorAll(".carousel i");

let firstPostWidth = firstPost.clientWidth;

arrows.forEach(arrow => {
    arrow.addEventListener("click", () => {
        cposts.scrollLeft += arrow.id == "arrow-left" ? -firstPostWidth : firstPostWidth;
    });
});






