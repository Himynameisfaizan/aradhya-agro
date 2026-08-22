<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us | Aradhya Agro Industries</title>
  <meta name="description"
    content="The story of Aradhya Agro Industries, our vision, mission, and manufacturing capacity.">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Yatra+One&family=Mukta:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/common.css">
</head>

<body>

  <?php include("include/header.php") ?>
  <style>
    .value-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
    }

    @media (max-width:768px) {
      .value-grid {
        grid-template-columns: 1fr;
      }
    }

    .founder-card {
      background: #fff;
      border-radius: 24px;
      padding: 2.5rem;
      box-shadow: 0 15px 40px rgba(42, 33, 20, .08);
      border: 1px solid rgba(122, 30, 43, .06);
    }

    .founder-quote {
      font-family: 'Yatra One', cursive;
      font-size: 1.3rem;
      color: var(--maroon);
      line-height: 1.5;
      border-left: 3px solid var(--gold);
      padding-left: 1.3rem;
    }

    .capacity-strip {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      justify-content: center;
    }

    .capacity-item {
      text-align: center;
      min-width: 150px;
      background: #fff;
      border-radius: 16px;
      padding: 1.6rem 1.2rem;
      box-shadow: 0 8px 24px rgba(42, 33, 20, .05);
    }

    .capacity-item b {
      display: block;
      font-family: 'Yatra One', cursive;
      font-size: 1.8rem;
      color: var(--maroon);
    }

    .capacity-item span {
      font-size: .82rem;
      color: #6b5b41;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: .04em;
    }
  </style>

  <section class="page-hero">
    <div class="container">
      <div class="breadcrumb-trail"><a href="index.php">Home</a> / About Us</div>
      <p class="eyebrow">Our Story</p>
      <h1>From a Health Crisis to a Global Promise</h1>
      <p>How one family's search for genuinely pure mustard oil grew into a farmer-first business now trusted across 15+
        countries.</p>
    </div>
  </section>

  <!-- HISTORY -->
  <section class="section-pad">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="divider-leaf">Our History</span>
          <h2 class="mt-2" style="color:var(--maroon-deep);">A Beginning Rooted in a Real Problem</h2>
          <p style="color:#5c4d38; line-height:1.8; font-size:1.02rem;">A personal health scare revealed a shocking
            truth for our founder — finding genuinely pure, unadulterated mustard oil had become nearly impossible in
            the open market. Determined to solve this for their own family, they turned to farmers directly, bypassing
            the layers of middlemen that had let purity slip.</p>
          <p style="color:#5c4d38; line-height:1.8; font-size:1.02rem;">That direct farmer-to-consumer model became
            <strong>Aradhya Agro Industries Pvt. Ltd.</strong>, registered and based in Maharajganj, Uttar Pradesh. What
            started as oil for a handful of local families has grown into a business shipping cold-pressed mustard oil
            to customers, restaurants, and distributors in more than 15 countries — without ever giving up the
            traditional Kachchi Ghani method that started it all.
          </p>
        </div>
        <div class="col-lg-6">
          <img src="assets/farmer-field.jpg" alt="Mustard farm where Aradhya sources its seeds" class="teaser-img"
            style="border-radius:20px 60px 20px 60px; box-shadow:0 20px 40px rgba(42,33,20,.25); width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- VISION / MISSION -->
  <section class="section-pad" style="background:var(--cream-deep);">
    <div class="container">
      <div class="section-head mx-auto text-center">
        <span class="divider-leaf">What Drives Us</span>
        <h2>Vision &amp; Mission</h2>
      </div>
      <div class="value-grid">
        <div class="info-card">
          <div class="icon-wrap"><i class="bi bi-eye"></i></div>
          <h3>Our Vision</h3>
          <p>To be the most trusted name in cold-pressed mustard oil worldwide — known equally for purity, fair
            treatment of farmers, and genuine transparency from field to bottle.</p>
        </div>
        <div class="info-card">
          <div class="icon-wrap"><i class="bi bi-bullseye"></i></div>
          <h3>Our Mission</h3>
          <p>To deliver 100% chemical-free, cold-pressed mustard oil to every household and business that values real
            quality, while building lasting, fair partnerships with the farmers who grow our seeds.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FOUNDER MESSAGE -->
  <section class="section-pad">
    <div class="container">
      <div class="section-head mx-auto text-center">
        <span class="divider-leaf">In Their Own Words</span>
        <h2>Founder's Message</h2>
      </div>
      <div class="founder-card mx-auto" style="max-width:52rem;">
        <p class="founder-quote">"We built Aradhya because we couldn't find the oil our grandparents cooked with — pure,
          honestly pressed, and free of shortcuts. Every bottle we ship, whether it goes to a village kitchen or a
          container headed overseas, is held to that same standard."</p>
        <p class="mt-4 mb-0" style="color:#6b5b41; font-weight:600;">— Founder, Aradhya Agro Industries Pvt. Ltd.</p>
      </div>
    </div>
  </section>

  <!-- MANUFACTURING CAPACITY / INFRASTRUCTURE -->
  <section class="section-pad" style="background:var(--cream-deep);">
    <div class="container">
      <div class="section-head mx-auto text-center">
        <span class="divider-leaf">Manufacturing Capacity &amp; Infrastructure</span>
        <h2>Built to Scale, Without Cutting Corners</h2>
      </div>
      <div class="capacity-strip mb-5">
        <div class="capacity-item"><b>500+</b><span>Partner Farmers</span></div>
        <div class="capacity-item"><b>15+</b><span>Export Countries</span></div>
        <div class="capacity-item"><b>10K+</b><span>Bottles Sold</span></div>
        <div class="capacity-item"><b>100%</b><span>Chemical-Free</span></div>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="info-card">
            <div class="icon-wrap"><i class="bi bi-gear-wide-connected"></i></div>
            <h3>Wooden Ghani Units</h3>
            <p>Traditional low-temperature cold-press extraction that preserves natural nutrients and aroma.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info-card">
            <div class="icon-wrap"><i class="bi bi-clipboard2-pulse"></i></div>
            <h3>In-House Lab Testing</h3>
            <p>Every batch is checked for purity before it moves to filtration and packing.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info-card">
            <div class="icon-wrap"><i class="bi bi-box-seal"></i></div>
            <h3>Export-Grade Packing Line</h3>
            <p>Hygienic, food-grade packaging built to meet international shipping standards.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-pad">
    <div class="container">
      <div class="cta-band">
        <h2>Want to See the Full Process?</h2>
        <p>From seed procurement to the export container — walk through every stage of how Aradhya oil is made.</p>
        <a href="manufacturing.php" class="btn-gold">See Our Manufacturing Process <i
            class="bi bi-arrow-right ms-1"></i></a>
      </div>
    </div>
  </section>
  <!-- ============================================ -->
  <!-- ========== FOOTER ========== -->
  <!-- ============================================ -->
  <?php include("include/footer.php") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>