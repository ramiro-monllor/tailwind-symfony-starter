/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// Import the main CSS file which Webpack will output into a single css file (app.css in this case)
import './styles/app.css';

// Start the Stimulus application
import './bootstrap';

// Enable the interactive UI components from Flowbite
import 'flowbite';

// Import jQuery and assign it to the global window object
import $ from 'jquery';
window.$ = window.jQuery = $;

// Import DataTables
import 'datatables.net';

// Make sure the DataTables styles are imported
import 'datatables.net-dt/css/dataTables.dataTables.min.css';

// Initialize DataTables when the document is ready
$(document).ready(function () {
    $('#myTable').DataTable(); // Initializes DataTables for your table with ID 'myTable'
});
