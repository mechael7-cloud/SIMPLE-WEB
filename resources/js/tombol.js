const tombolNav = document.getElementById("tombol-nav");
const menuNav = document.getElementById("menu-nav");
const isiElement = document.getElementById("isi-element");

tombolNav.addEventListener("click", () => {
    menuNav.classList.toggle("control");
    isiElement.classList.toggle("show");
})