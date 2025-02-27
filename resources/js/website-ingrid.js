document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menuButton");
    const mobileMenu = document.getElementById("mobile-menu");

    menuButton.onclick = (event) => {
        mobileMenu.classList.toggle("show");
        event.stopPropagation(); // Voorkomt dat het document-event direct wordt getriggerd
    };

    // Sluit het menu als ergens anders wordt geklikt
    document.addEventListener("click", (event) => {
        if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
            mobileMenu.classList.remove("show");
        }
    });
});
