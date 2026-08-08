<?php include ("./admin/db-conn.php"); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our Products | Aradhya Agro Industries</title>
<meta name="description" content="Aradhya mustard oil product range: 500ml, 1L, 2L, 5L, 15L and mustard oil cake, with specifications.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Yatra+One&family=Mukta:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="assets/common.css">
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="assets/logo (2).jpeg" width="100" alt="Aradhya Agro Industries"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link " href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link " href="manufacturing.php">Manufacturing</a></li>
        <li class="nav-item"><a class="nav-link active" href="products.php">Products</a></li>
        <li class="nav-item"><a class="nav-link " href="quality.php">Quality</a></li>
        <li class="nav-item"><a class="nav-link " href="export.php">Export</a></li>
        <li class="nav-item"><a class="nav-link " href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link " href="contact.php">Contact</a></li>
        <li class="nav-item ms-lg-2"><a class="btn-order" href="contact.php">Order / Export</a></li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .product-card{ background:#fff; border-radius:24px; overflow:hidden; border:1px solid rgba(122,30,43,.06); box-shadow:0 8px 30px rgba(42,33,20,.06); height:100%; display:flex; flex-direction:column; transition:all .4s cubic-bezier(.25,.8,.25,1.2); }
  .product-card:hover{ transform:translateY(-10px); box-shadow:0 22px 44px rgba(42,33,20,.16); border-color:rgba(227,166,4,.3); }
  .product-img-wrap{ background:linear-gradient(160deg,#FDFBF7 0%,#F3E6C4 100%); padding:2rem; display:flex; align-items:center; justify-content:center; height:220px; }
  .product-img-wrap img{ max-height:100%; max-width:100%; object-fit:contain; }
  .product-img-wrap i{ font-size:3rem; color:var(--gold-bright); }
  .product-body{ padding:1.4rem 1.6rem 1.8rem; flex:1; display:flex; flex-direction:column; }
  .size-tag{ display:inline-block; background:linear-gradient(135deg,var(--maroon),var(--maroon-deep)); color:#fff; font-size:.72rem; font-weight:700; padding:5px 14px; border-radius:999px; margin-bottom:.7rem; }
  .product-body h3{ font-weight:800; font-size:1.1rem; color:var(--maroon-deep); margin-bottom:.4rem; }
  .product-body p{ font-size:.86rem; color:#6b5b41; margin-bottom:.9rem; flex:1; }
  .product-body ul{ list-style:none; padding:0; margin:0 0 1rem; font-size:.82rem; color:#5c4d38; }
  .product-body ul li{ display:flex; align-items:center; gap:6px; margin-bottom:4px; }
  .product-body ul li i{ color:var(--green); }

  .nutrition-table th, .nutrition-table td{ font-size:.88rem; }
</style>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb-trail"><a href="index.php">Home</a> / Products</div>
    <p class="eyebrow">Our Products</p>
    <h1>Perfect Sizes for Every Need</h1>
    <p>From trial packs to export containers — choose the size that fits your family, business, or international order.</p>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row g-4">

      <?php
      $product_sql = "SELECT * FROM products WHERE status = 1 ORDER BY FIELD(id, 3, 6, 5, 1, 2, 4)";
      $product_res = mysqli_query($conn, $product_sql);

      if($product_res && mysqli_num_rows($product_res) > 0) {
          while($row = mysqli_fetch_assoc($product_res)) {
              
              $img_path = rtrim($site, '/') . "/admin/assets/img/uploads/" . $row['pro_img'];
              
              $description_with_icons = str_replace('<li>', '<li><i class="bi bi-check-circle-fill"></i> ', $row['description']);
              
              $size_tag = "SIZE";
              if (stripos($row['pro_name'], 'Trial') !== false) $size_tag = "500 ML";
              elseif (stripos($row['pro_name'], 'Popular') !== false) $size_tag = "1 LITRE";
              elseif (stripos($row['pro_name'], 'Family') !== false) $size_tag = "2 LITRE";
              elseif (stripos($row['pro_name'], 'Institutional') !== false) $size_tag = "5 LITRE";
              elseif (stripos($row['pro_name'], 'Export') !== false) $size_tag = "15 LITRE";
              elseif (stripos($row['pro_name'], 'Cake') !== false) $size_tag = "BY-PRODUCT";

              $btn_text = "Order Now";
              $btn_link = "contact.php";
              if (stripos($row['pro_name'], 'Export') !== false) {
                  $btn_text = "Export Inquiry";
                  $btn_link = "export.php";
              } elseif (stripos($row['pro_name'], 'Institutional') !== false || stripos($row['pro_name'], 'Family') !== false) {
                  $btn_text = "Bulk Inquiry";
              } elseif (stripos($row['pro_name'], 'Cake') !== false) {
                  $btn_text = "Enquire";
              }
              ?>
              
              <div class="col-md-6 col-lg-4">
                <div class="product-card">
                  <div class="product-img-wrap">
                    <img src="<?= $img_path; ?>" alt="<?= htmlspecialchars($row['pro_name']); ?>" loading="lazy">
                  </div>
                  <div class="product-body">
                    <span class="size-tag"><?= $size_tag; ?></span>
                    <h3><?= htmlspecialchars($row['pro_name']); ?></h3>
                    
                    <?= $row['short_desc']; ?>
                    <?= $description_with_icons; ?>
                    
                    <a href="<?= $btn_link; ?>" class="btn-order text-center"><?= $btn_text; ?></a>
                  </div>
                </div>
              </div>

              <?php
          }
      } else {
          echo "<div class='col-12'><p class='text-center'>Products loading soon...</p></div>";
      }
      ?>

    </div>
  </div>
</section>

<!-- NUTRITIONAL FACTS (Ye Static hi rahega jaisa tumne diya hai) -->
<section class="section-pad" style="background:var(--cream-deep);">
</section>

<!-- NUTRITIONAL FACTS -->
<section class="section-pad" style="background:var(--cream-deep);">
  <div class="container">
    <div class="section-head mx-auto text-center">
      <span class="divider-leaf">Per 100 ml (Approximate)</span>
      <h2>Nutritional Facts</h2>
    </div>
    <div class="table-responsive">
      <table class="data-table nutrition-table">
        <thead><tr><th>Nutrient</th><th>Approx. Value</th></tr></thead>
        <tbody>
          <tr><td>Energy</td><td>884 kcal</td></tr>
          <tr><td>Total Fat</td><td>100 g</td></tr>
          <tr><td>Saturated Fat</td><td>~12 g</td></tr>
          <tr><td>Monounsaturated Fat</td><td>~59 g</td></tr>
          <tr><td>Polyunsaturated Fat (Omega 3 &amp; 6)</td><td>~21 g</td></tr>
          <tr><td>Cholesterol</td><td>0 mg</td></tr>
        </tbody>
      </table>
    </div>
    <p class="text-center mt-3" style="color:#6b5b41; font-size:.85rem;">Exact values are confirmed per batch through in-house lab testing; detailed lab reports are available on request.</p>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="cta-band">
      <h2>Need a Bulk or Custom-Label Order?</h2>
      <p>Tell us your quantity, packaging preference, and destination — we'll send a tailored quote.</p>
      <a href="contact.php" class="btn-gold">Send Bulk Enquiry <i class="bi bi-arrow-right ms-1"></i></a>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->

<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-4">
          <h5>ARADHYA AGRO</h5>
          <p style="color:#cbbfa4;">Exporting the purest cold-pressed mustard oil from the farms of India to the world. Certified, trusted, and authentic.</p>
          <div class="d-flex gap-3 fs-5 mt-3">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="https://wa.me/919278480163"><i class="bi bi-whatsapp"></i></a>
            <a href="mailto:aradhyaagroindustriespvtltd@gmail.com"><i class="bi bi-envelope"></i></a>
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
            <li><i class="bi bi-envelope me-2"></i> aradhyaagroindustriespvtltd@gmail.com</li>
            <li><i class="bi bi-whatsapp me-2"></i> +91 9278480163</li>
            <li><i class="bi bi-geo-alt me-2"></i> Maharajganj, Uttar Pradesh, India</li>
            <li><i class="bi bi-file-text me-2"></i> FSSAI · ISO 22000 · DPIIT</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <div>&copy; 2026 Aradhya Agro Industries Private Limited. All rights reserved. | Exporting purity worldwide.</div>
      <div>Designed with <i class="bi bi-heart-fill text-danger"></i> for Indian farmers &amp; global families</div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
