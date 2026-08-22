<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/logo (2).jpeg" width="100" alt="Aradhya Agro Industries">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item"><a
                        class="nav-link <?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>"
                        href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"
                        href="about.php">About Us</a></li>
                <li class="nav-item"><a
                        class="nav-link <?php echo ($current_page == 'manufacturing.php') ? 'active' : ''; ?>"
                        href="manufacturing.php">Manufacturing</a></li>
                <li class="nav-item"><a
                        class="nav-link <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>"
                        href="products.php">Products</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'quality.php') ? 'active' : ''; ?>"
                        href="quality.php">Quality</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'export.php') ? 'active' : ''; ?>"
                        href="export.php">Export</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'gallery.php') ? 'active' : ''; ?>"
                        href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"
                        href="contact.php">Contact</a></li>
                <li class="nav-item ms-lg-2"><a class="btn-order" href="contact.php">Order / Export</a></li>
            </ul>
        </div>
    </div>
</nav>