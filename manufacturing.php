<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manufacturing Unit | Aradhya Agro Industries</title>
  <meta name="description" content="How Aradhya produces cold-pressed mustard oil, from seed procurement to dispatch.">

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
    .flow-step {
      display: flex;
      gap: 1.6rem;
      padding: 2rem 0;
      border-bottom: 1px solid rgba(122, 30, 43, .08);
    }

    .flow-step:last-child {
      border-bottom: none;
    }

    .flow-num {
      flex: 0 0 64px;
      height: 64px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--gold-bright), var(--gold));
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Yatra One', cursive;
      font-size: 1.5rem;
    }

    .flow-body h3 {
      color: var(--maroon-deep);
      font-family: 'Mukta', sans-serif;
      font-weight: 800;
      font-size: 1.15rem;
      margin-bottom: .4rem;
    }

    .flow-body p {
      color: #5c4d38;
      line-height: 1.7;
      margin: 0;
      font-size: .96rem;
    }
  </style>

  <section class="page-hero">
    <div class="container">
      <div class="breadcrumb-trail"><a href="index.php">Home</a> / Manufacturing Unit</div>
      <p class="eyebrow">🌿 Kachchi Ghani Process</p>
      <h1>From Seed to Export Container</h1>
      <p>Every drop of Aradhya oil travels through a meticulous 7-step journey, ensuring purity from farm to finished
        bottle.</p>
    </div>
  </section>

  <section class="section-pad">
    <div class="container" style="max-width:56rem;">

      <div class="flow-step">
        <div class="flow-num">1</div>
        <div class="flow-body">
          <h3>Raw Material Procurement</h3>
          <p>Fresh, high-quality mustard seeds are sourced directly from our network of 500+ partner farmers at peak
            ripeness — cutting out middlemen so both farmer and buyer get a fair deal.</p>
        </div>
      </div>

      <div class="flow-step">
        <div class="flow-num">2</div>
        <div class="flow-body">
          <h3>Cleaning</h3>
          <p>Seeds are thoroughly cleaned to remove dust, husk, and foreign matter before they ever reach the press,
            protecting both flavour and purity downstream.</p>
        </div>
      </div>

      <div class="flow-step">
        <div class="flow-num">3</div>
        <div class="flow-body">
          <h3>Cold Press Extraction</h3>
          <p>Cleaned seeds are slow-crushed in traditional wooden churners (Kachchi Ghani) at low temperature,
            preserving natural nutrients, aroma, and the characteristic pungency of real mustard oil.</p>
        </div>
      </div>

      <div class="flow-step">
        <div class="flow-num">4</div>
        <div class="flow-body">
          <h3>Natural Filtration</h3>
          <p>No chemical solvents, ever. Oil is clarified using natural sedimentation and multi-layer filtration until
            it runs clear.</p>
        </div>
      </div>

      <div class="flow-step">
        <div class="flow-num">5</div>
        <div class="flow-body">
          <h3>Lab Testing</h3>
          <p>Every batch is checked in-house for purity, moisture, and quality parameters before it is approved for
            packing.</p>
        </div>
      </div>

      <div class="flow-step">
        <div class="flow-num">6</div>
        <div class="flow-body">
          <h3>Packing</h3>
          <p>Oil is filled into food-grade glass or PET bottles and heavy-duty canisters, sealed to hygienic,
            export-ready standards.</p>
        </div>
      </div>

      <div class="flow-step">
        <div class="flow-num">7</div>
        <div class="flow-body">
          <h3>Dispatch</h3>
          <p>Finished stock is dispatched for domestic delivery or loaded into export containers with complete shipping
            and customs documentation.</p>
        </div>
      </div>

    </div>
  </section>

  <section class="section-pad" style="background:var(--cream-deep);">
    <div class="container">
      <div class="cta-band">
        <h2>Curious About Our Certifications?</h2>
        <p>See the licenses and quality standards that back every batch we produce.</p>
        <a href="quality.php" class="btn-gold">View Quality &amp; Certifications <i
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