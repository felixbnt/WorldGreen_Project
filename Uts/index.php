<?php
// Include the header
include 'header.php';

// Determine the page to include
$page = isset($_GET['page']) ? $_GET['page'] : 'landing_page';

switch ($page) {
    case 'landing_page':
        include 'landing_page.php';
        break;
    case 'halaman_produk':
        include 'halaman_produk.php';
        break;
    case 'login':
        include 'login.php';
        break;
    case 'registrasi':
        include 'registrasi.php';
        break;
    default:
        echo "<h1>404 - Page Not Found</h1>";
        break;
}

// Include the footer
include 'footer.php';
?>