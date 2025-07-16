import 'bootstrap';

// Admin - SideBar
document.getElementById("toggle-btn").addEventListener("click", function () {
    document.body.classList.toggle("collapsed-sidebar");
    const icon = this.querySelector("i");
    icon.classList.toggle("fa-chevron-left");
    icon.classList.toggle("fa-chevron-right");

    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("main-content");

    if (document.body.classList.contains("collapsed-sidebar")) {
        sidebar.style.width = "80px";
        mainContent.style.marginLeft = "80px";
    } else {
        sidebar.style.width = "250px";
        mainContent.style.marginLeft = "250px";
    }
});
