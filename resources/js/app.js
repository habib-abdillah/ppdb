import './bootstrap';
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import Swal from 'sweetalert2';

window.Swal = Swal;

flatpickr("#tanggal_lahir", {
  dateFormat: "Y-m-d",
  altInput: true,
  altFormat: "d/m/Y",
  allowInput: true,
});