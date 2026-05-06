document.addEventListener("DOMContentLoaded", function () {
    const sidebarToggle = document.getElementById("sidebarToggle");
    const adminSidebar = document.getElementById("adminSidebar");

    if (sidebarToggle && adminSidebar) {
        sidebarToggle.addEventListener("click", function () {
            adminSidebar.classList.toggle("show");
        });
    }
});