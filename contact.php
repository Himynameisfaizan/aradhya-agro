<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include("admin/db-conn.php");

// Fetch Contact Data
$sqlCon = "SELECT * FROM `contacts` ORDER BY id ASC LIMIT 1";
$resultCon = $conn->query($sqlCon);
$contact = ($resultCon && $resultCon->num_rows > 0) ? $resultCon->fetch_assoc() : [];

// Safe helper values
$company_name = htmlspecialchars($contact['company_name'] ?? 'Aradhya Agro Industries Pvt. Ltd.');
$copyright = htmlspecialchars($contact['copyright'] ?? '© 2026 Aradhya Agro Industries Private Limited. All rights reserved.');
$address = htmlspecialchars($contact['address'] ?? '');
$address2 = htmlspecialchars($contact['address2'] ?? '');
$phone = htmlspecialchars($contact['phone'] ?? '');
$wp_number = htmlspecialchars($contact['wp_number'] ?? '');
$telephone = htmlspecialchars($contact['telephone'] ?? '');
$email = htmlspecialchars($contact['email'] ?? '');
$contact_email = htmlspecialchars($contact['contact_email'] ?? $email);
$working_hours = htmlspecialchars($contact['working_hours'] ?? '');
$facebook = htmlspecialchars($contact['facebook'] ?? '#');
$instagram = htmlspecialchars($contact['instagram'] ?? '#');
$twitter = htmlspecialchars($contact['twitter'] ?? '#');
$linkdin = htmlspecialchars($contact['linkdin'] ?? '#');
$map_iframe = $contact['map'] ?? '';

// Sanitize phone for wa.me link (removes spaces, +, dashes)
$clean_wp = preg_replace('/[^0-9]/', '', $wp_number);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us | <?php echo $company_name; ?></title>
  <meta name="description"
    content="Contact <?php echo $company_name; ?> for retail orders, bulk enquiries, distributorship and export.">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Yatra+One&family=Mukta:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/common.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="assets/logo (2).jpeg" width="100"
          alt="<?php echo $company_name; ?>"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
          <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link " href="about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link " href="manufacturing.php">Manufacturing</a></li>
          <li class="nav-item"><a class="nav-link " href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link " href="quality.php">Quality</a></li>
          <li class="nav-item"><a class="nav-link " href="export.php">Export</a></li>
          <li class="nav-item"><a class="nav-link " href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
          <li class="nav-item ms-lg-2"><a class="btn-order" href="contact.php">Order / Export</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <style>
    .contact-card {
      background: var(--maroon);
      color: #fff;
      border-radius: 22px;
      padding: 2.6rem;
      box-shadow: 0 20px 40px rgba(122, 30, 43, .3);
    }

    .contact-card h3 {
      font-family: 'Yatra One', cursive;
      color: var(--gold-bright);
    }

    .contact-line {
      display: flex;
      gap: .8rem;
      align-items: flex-start;
      margin-bottom: 1.1rem;
    }

    .contact-line i {
      color: var(--gold-bright);
      font-size: 1.15rem;
      margin-top: .15rem;
    }

    .contact-line span,
    .contact-line a {
      font-size: .94rem;
      color: #F3E6C4;
      text-decoration: none;
    }

    .contact-line a:hover {
      color: #fff;
      text-decoration: underline;
    }

    .hero-tagline {
      font-family: 'Yatra One', cursive;
      color: var(--maroon);
      font-size: 1.25rem;
      margin-top: 1.6rem;
      border-left: 3px solid var(--gold);
      padding-left: .9rem;
    }

    .form-control {
      background: var(--cream);
      border: 1px solid rgba(122, 30, 43, .15);
      border-radius: 10px;
      padding: .7rem .9rem;
    }

    .form-control:focus {
      box-shadow: 0 0 0 .2rem rgba(201, 138, 2, .25);
      border-color: var(--gold);
    }

    .btn-submit {
      background: var(--green);
      color: #fff;
      font-weight: 700;
      border-radius: 10px;
      padding: .7rem 1.4rem;
      border: none;
    }

    .btn-submit:hover {
      background: #163a28;
      color: #fff;
    }

    .map-embed {
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(42, 33, 20, .1);
    }

    .map-embed iframe {
      width: 100% !important;
      height: 360px !important;
      border: 0;
    }
  </style>

  <section class="page-hero">
    <div class="container">
      <div class="breadcrumb-trail"><a href="index.php">Home</a> / Contact</div>
      <p class="eyebrow">Get In Touch</p>
      <h1>Contact Us for Orders &amp; Export</h1>
      <p>Retail orders, bulk enquiries, distributor applications, or export quotes — our team typically replies within
        24 hours.</p>
    </div>
  </section>

  <section class="section-pad">
    <div class="container">
      <div class="row g-4 align-items-stretch">
        <!-- Dynamic Contact Info Card -->
        <div class="col-lg-5">
          <div class="contact-card h-100">
            <h3 class="mb-4"><?php echo $company_name; ?></h3>

            <?php if (!empty($address)): ?>
              <div class="contact-line">
                <i class="bi bi-geo-alt-fill"></i>
                <span><?php echo nl2br($address); ?><?php echo !empty($address2) ? ', ' . nl2br($address2) : ''; ?></span>
              </div>
            <?php endif; ?>

            <?php if (!empty($phone) || !empty($wp_number)): ?>
              <div class="contact-line">
                <i class="bi bi-telephone-fill"></i>
                <span>
                  <?php if (!empty($wp_number)): ?>
                    <a href="https://wa.me/<?php echo $clean_wp; ?>" target="_blank">+<?php echo $wp_number; ?>
                      (WhatsApp)</a>
                  <?php endif; ?>
                  <?php if (!empty($phone) && !empty($wp_number)): ?> &nbsp;|&nbsp; <?php endif; ?>
                  <?php if (!empty($phone)): ?>
                    <a href="tel:<?php echo $phone; ?>">+<?php echo $phone; ?></a>
                  <?php endif; ?>
                </span>
              </div>
            <?php endif; ?>

            <?php if (!empty($email)): ?>
              <div class="contact-line">
                <i class="bi bi-envelope-fill"></i>
                <span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span>
              </div>
            <?php endif; ?>

            <?php if (!empty($working_hours)): ?>
              <div class="contact-line">
                <i class="bi bi-clock-fill"></i>
                <span><?php echo $working_hours; ?></span>
              </div>
            <?php endif; ?>

            <div class="contact-line">
              <i class="bi bi-patch-check-fill"></i>
              <span>FSSAI: 12725033000119 &nbsp;|&nbsp; DPIIT: DIPP256135</span>
            </div>

            <p class="mt-4 mb-0 hero-tagline" style="border-color:var(--gold-bright); color:#fff;">
              Purity • Trust • Health • Global
            </p>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-7">
          <form id="contactForm" class="row g-3 bg-white p-4 p-md-5 rounded-4 shadow-sm h-100">

            <div class="col-12">
              <div id="formResponse" style="display: none;" class="alert" role="alert"></div>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-semibold">Your Name <span class="text-danger">*</span></label>
              <input type="text" name="name" class="form-control" placeholder="Full name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Mobile / WhatsApp <span class="text-danger">*</span></label>
              <input type="tel" name="phone" class="form-control" placeholder="With country code" required>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
              <input type="email" name="email" class="form-control" placeholder="you@company.com" required>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Country <span class="text-danger">*</span></label>
              <input type="text" name="country" class="form-control" placeholder="Your country" required>
            </div>
            <div class="col-12">
              <label class="form-label fw-semibold">What would you like?</label>
              <select name="requirement" class="form-control">
                <option value="500 ml (Retail)">500 ml (Retail)</option>
                <option value="1 Litre">1 Litre</option>
                <option value="2 Litre">2 Litre</option>
                <option value="5 / 15 Litre">5 / 15 Litre</option>
                <option value="Bulk / B2B / Export Inquiry">Bulk / B2B / Export Inquiry</option>
                <option value="Become a Distributor">Become a Distributor</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label fw-semibold">Message</label>
              <textarea name="message" class="form-control" rows="3"
                placeholder="Tell us about your requirements..."></textarea>
            </div>
            <div class="col-12">
              <button type="submit" id="submitBtn" class="btn-submit">Send Inquiry</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Dynamic Google Map Section -->
  <?php if (!empty($map_iframe)): ?>
    <section class="section-pad" style="background:var(--cream-deep); padding-top:0;">
      <div class="container">
        <div class="map-embed">
          <?php
          // Handles both full <iframe> tag and direct map URL strings
          if (strpos($map_iframe, '<iframe') !== false) {
            echo $map_iframe;
          } else {
            echo '<iframe src="' . htmlspecialchars($map_iframe) . '" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
          }
          ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Dynamic Footer -->
  <footer>
    <div class="footer-main">
      <div class="container">
        <div class="row gy-4">
          <div class="col-md-4">
            <h5><?php echo strtoupper($company_name); ?></h5>
            <p style="color:#cbbfa4;">Exporting the purest cold-pressed mustard oil from the farms of India to the
              world. Certified, trusted, and authentic.</p>
            <div class="d-flex gap-3 fs-5 mt-3">
              <?php if (!empty($facebook) && $facebook !== '#'): ?>
                <a href="<?php echo $facebook; ?>" target="_blank"><i class="bi bi-facebook"></i></a>
              <?php endif; ?>
              <?php if (!empty($instagram) && $instagram !== '#'): ?>
                <a href="<?php echo $instagram; ?>" target="_blank"><i class="bi bi-instagram"></i></a>
              <?php endif; ?>
              <?php if (!empty($twitter) && $twitter !== '#'): ?>
                <a href="<?php echo $twitter; ?>" target="_blank"><i class="bi bi-twitter-x"></i></a>
              <?php endif; ?>
              <?php if (!empty($linkdin) && $linkdin !== '#'): ?>
                <a href="<?php echo $linkdin; ?>" target="_blank"><i class="bi bi-linkedin"></i></a>
              <?php endif; ?>
              <?php if (!empty($clean_wp)): ?>
                <a href="https://wa.me/<?php echo $clean_wp; ?>" target="_blank"><i class="bi bi-whatsapp"></i></a>
              <?php endif; ?>
              <?php if (!empty($email)): ?>
                <a href="mailto:<?php echo $email; ?>"><i class="bi bi-envelope"></i></a>
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
              <?php if (!empty($email)): ?>
                <li><i class="bi bi-envelope me-2"></i> <?php echo $email; ?></li>
              <?php endif; ?>
              <?php if (!empty($wp_number)): ?>
                <li><i class="bi bi-whatsapp me-2"></i> +<?php echo $wp_number; ?></li>
              <?php endif; ?>
              <?php if (!empty($address)): ?>
                <li><i class="bi bi-geo-alt me-2"></i> <?php echo $address; ?></li>
              <?php endif; ?>
              <li><i class="bi bi-file-text me-2"></i> FSSAI · ISO 22000 · DPIIT</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <div><?php echo $copyright; ?> | Exporting purity worldwide.</div>
        <div>Designed with <i class="bi bi-heart-fill text-danger"></i> for Indian farmers &amp; global families</div>
      </div>
    </div>
  </footer>

  <script>
    document.getElementById('contactForm').addEventListener('submit', async function (e) {
      e.preventDefault();

      let btn = document.getElementById('submitBtn');
      let responseDiv = document.getElementById('formResponse');
      let formData = new FormData(this);

      let originalText = btn.innerHTML;
      btn.innerHTML = "Sending Inquiry... <span class='spinner-border spinner-border-sm'></span>";
      btn.disabled = true;
      responseDiv.style.display = 'none';

      try {
        let response = await fetch('send_mail.php', {
          method: 'POST',
          body: formData
        });

        let result = await response.json();

        responseDiv.style.display = 'block';
        if (result.status === 'success') {
          responseDiv.className = 'alert alert-success';
          responseDiv.innerHTML = result.message;
          this.reset();
        } else {
          responseDiv.className = 'alert alert-danger';
          responseDiv.innerHTML = result.message;
        }
      } catch (error) {
        responseDiv.style.display = 'block';
        responseDiv.className = 'alert alert-danger';
        responseDiv.innerHTML = "Something went wrong! Please try again later.";
      } finally {
        btn.innerHTML = originalText;
        btn.disabled = false;
      }
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>