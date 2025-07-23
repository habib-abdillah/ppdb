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
        isHoveringSidebar: false,
        isHoverTriggered: false, // <--- tambahan

        init() {
            this.checkScreen();
            if (window.innerWidth >= 768) {
                this.isSidebarCollapsed = false;
            }
        },

        checkScreen() {
            this.openSidebar = window.innerWidth >= 768;
            if (window.innerWidth < 768) {
                this.isSidebarCollapsed = false;
            }
        },

        toggleSidebarCollapse() {
            this.isSidebarCollapsed = !this.isSidebarCollapsed;
            this.isHoverTriggered = false; // <- manual toggle, bukan hover
        },

        mouseEnterSidebar() {
            if (window.innerWidth >= 768 && this.isSidebarCollapsed) {
                this.isSidebarCollapsed = false;
                this.isHoverTriggered = true; // <- sedang hover-expand
            }
        },

        mouseLeaveSidebar() {
            if (window.innerWidth >= 768 && this.isHoverTriggered) {
                // hanya collapse jika expand-nya karena hover
                setTimeout(() => {
                    if (!this.isHoveringSidebar) {
                        this.isSidebarCollapsed = true;
                        this.isHoverTriggered = false;
                    }
                }, 200);
            }
        },

        menuClicked() {
            if (window.innerWidth >= 768) {
                this.isSidebarCollapsed = true;
                this.isHoverTriggered = false;
            }
        },

        activeSubmenu: null,
        toggleSubmenu(id) {
            this.activeSubmenu = this.activeSubmenu === id ? null : id;
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
