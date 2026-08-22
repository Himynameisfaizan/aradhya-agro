<?php
if (isset($conn)) {
    $footer_query = $conn->query("SELECT * FROM contacts ORDER BY id ASC LIMIT 1");
    $foot_data = ($footer_query && $footer_query->num_rows > 0) ? $footer_query->fetch_assoc() : [];
} else {
    $foot_data = [];
}

$f_company_name = htmlspecialchars($foot_data['company_name'] ?? 'ARADHYA AGRO');
$f_copyright = htmlspecialchars($foot_data['copyright'] ?? '© 2026 Aradhya Agro Industries Private Limited. All rights reserved.');
$f_address = htmlspecialchars($foot_data['address'] ?? 'Maharajganj, Uttar Pradesh, India');
$f_phone = htmlspecialchars($foot_data['phone'] ?? '');
$f_wp_number = htmlspecialchars($foot_data['wp_number'] ?? '');
$f_email = htmlspecialchars($foot_data['email'] ?? '');
$f_facebook = htmlspecialchars($foot_data['facebook'] ?? '#');
$f_instagram = htmlspecialchars($foot_data['instagram'] ?? '#');
$f_twitter = htmlspecialchars($foot_data['twitter'] ?? '#');
$f_linkdin = htmlspecialchars($foot_data['linkdin'] ?? '#');

$clean_wp_foot = preg_replace('/[^0-9]/', '', $f_wp_number);
?>
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <h5><?php echo strtoupper($f_company_name); ?></h5>
                    <p style="color:#cbbfa4;">Exporting the purest cold-pressed mustard oil from the farms of India to
                        the world. Certified, trusted, and authentic.</p>
                    <div class="d-flex gap-3 fs-5 mt-3">
                        <?php if (!empty($f_facebook) && $f_facebook !== '#'): ?>
                            <a href="<?php echo $f_facebook; ?>" target="_blank"><i class="bi bi-facebook"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($f_instagram) && $f_instagram !== '#'): ?>
                            <a href="<?php echo $f_instagram; ?>" target="_blank"><i class="bi bi-instagram"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($f_twitter) && $f_twitter !== '#'): ?>
                            <a href="<?php echo $f_twitter; ?>" target="_blank"><i class="bi bi-twitter-x"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($f_linkdin) && $f_linkdin !== '#'): ?>
                            <a href="<?php echo $f_linkdin; ?>" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($clean_wp_foot)): ?>
                            <a href="https://wa.me/<?php echo $clean_wp_foot; ?>" target="_blank"><i
                                    class="bi bi-whatsapp"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($f_email)): ?>
                            <a href="mailto:<?php echo $f_email; ?>"><i class="bi bi-envelope"></i></a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="manufacturing.php">Manufacturing</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="quality.php">Quality &amp; Certifications</a></li>
                        <li><a href="export.php">Export</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h5>Export &amp; Contact</h5>
                    <ul class="list-unstyled footer-links">
                        <?php if (!empty($f_email)): ?>
                            <li><i class="bi bi-envelope me-2"></i> <a href="mailto:<?php echo $f_email; ?>"
                                    class="text-decoration-none" style="color:inherit;"><?php echo $f_email; ?></a></li>
                        <?php endif; ?>
                        <?php if (!empty($f_wp_number)): ?>
                            <li><i class="bi bi-whatsapp me-2"></i> <a href="https://wa.me/<?php echo $clean_wp_foot; ?>"
                                    target="_blank" class="text-decoration-none"
                                    style="color:inherit;"><?php echo $f_wp_number; ?></a></li>
                        <?php endif; ?>
                        <?php if (!empty($f_phone)): ?>
                            <li><i class="bi bi-telephone me-2"></i> <a href="tel:<?php echo $f_phone; ?>"
                                    class="text-decoration-none" style="color:inherit;"><?php echo $f_phone; ?></a></li>
                        <?php endif; ?>
                        <?php if (!empty($f_address)): ?>
                            <li><i class="bi bi-geo-alt me-2"></i> <?php echo $f_address; ?></li>
                        <?php endif; ?>
                        <li><i class="bi bi-file-text me-2"></i> FSSAI · ISO 22000 · DPIIT</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div><?php echo $f_copyright; ?> | Exporting purity worldwide.</div>
            <div>Designed with <i class="bi bi-heart-fill text-danger"></i> for Indian farmers &amp; global families
            </div>
        </div>
    </div>
</footer>