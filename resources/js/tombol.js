const tombolNav = document.getElementById("tombol-nav");
const menuNav = document.getElementById("menu-nav");

tombolNav.addEventListener("click", () => {
    menuNav.classList.toggle("control")
});