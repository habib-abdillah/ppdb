import "./bootstrap";
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import Swal from "sweetalert2";
import Alpine from "alpinejs";

window.Alpine = Alpine;
window.sidebarHandler = function () {
    return {
        openSidebar: window.innerWidth >= 768,
        isSidebarCollapsed: false,

        init() {
            this.checkScreen();
        },

        checkScreen() {
            this.openSidebar = window.innerWidth >= 768;
            if (window.innerWidth < 768) {
                this.isSidebarCollapsed = false;
            }
        },

        toggleSidebarCollapse() {
            this.isSidebarCollapsed = !this.isSidebarCollapsed;
        },
    };
};
Alpine.start();

window.Swal = Swal;

flatpickr("#tanggal_lahir", {
    dateFormat: "Y-m-d",
    altInput: true,
    altFormat: "d/m/Y",
    allowInput: true,
});

function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    const icon = document.getElementById("icon-" + id);
    submenu.classList.toggle("hidden");
    icon.classList.toggle("rotate-180");
}
