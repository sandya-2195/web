const menuB = document.querySelector(".menu-btn");
const menu =document.querySelector(".menu");

menuB.addEventListener("click", () => {
    menu.classList.toggle("mobile-menu");
});
