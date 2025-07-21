import './bootstrap';
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

flatpickr("#tanggal_lahir", {
  dateFormat: "d/m/Y",
  altInput: true,
  altFormat: "d/m/Y",
  allowInput: true,
});