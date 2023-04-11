import './bootstrap';

import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

// Import the plugin styles
import '@fortawesome/fontawesome-free/js/all.js';
import 'sweetalert2/dist/sweetalert2.min.css';

window.Alpine = Alpine;
window.Swal = Swal;

Alpine.start();