<?php
include("admin/db-conn.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gallery | Aradhya Agro Industries</title>
  <meta name="description" content="Photos of Aradhya's farms, manufacturing unit, packaging and customers.">

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
    .gallery-thumb-wrap {
      border-radius: 14px;
      overflow: hidden;
      height: 210px;
      box-shadow: 0 8px 20px rgba(42, 33, 20, .1);
      border: 1px solid rgba(122, 30, 43, .08);
      position: relative;
      cursor: pointer;
    }

    .gallery-thumb-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .4s ease;
    }

    .gallery-thumb-wrap:hover img {
      transform: scale(1.08);
    }

    .gallery-thumb-wrap::after {
      content: "\f52a";
      font-family: "bootstrap-icons";
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(42, 33, 20, 0);
      color: #fff;
      font-size: 1.4rem;
      opacity: 0;
      transition: .25s ease;
    }

    .gallery-thumb-wrap:hover::after {
      background: rgba(42, 33, 20, .35);
      opacity: 1;
    }

    #imgModal .modal-content {
      background: transparent;
    }

    #imgModal img {
      width: 100%;
      border-radius: 16px;
    }
  </style>

  <section class="page-hero">
    <div class="container">
      <div class="breadcrumb-trail"><a href="index.php">Home</a> / Gallery</div>
      <p class="eyebrow">Our Gallery</p>
      <h1>Visual Story of Purity</h1>
      <p>Farms, the wooden ghani press, packaging, and the families who trust Aradhya every day.</p>
    </div>
  </section>

  <section class="section-pad">
    <div class="container">
      <div class="row g-3">

        <?php
        // Fetch ALL images from the gallery table
        $gallery_sql = "SELECT * FROM gallery ORDER BY ID DESC"; // ID DESC taaki nayi images pehle aayein
        $gallery_res = mysqli_query($conn, $gallery_sql);

        if ($gallery_res && mysqli_num_rows($gallery_res) > 0) {
          while ($img = mysqli_fetch_assoc($gallery_res)) {

            // Path properly format kar rahe hain taaki double slash ka issue na aaye
            $full_img_path = rtrim($site, '/') . "/admin/" . $img['image_path'];
            ?>

            <div class="col-6 col-md-4 col-lg-3">
              <!-- data-full me image ka path pass karna zaroori hai tabhi click karne par modal me image khulegi -->
              <div class="gallery-thumb-wrap" data-full="<?= $full_img_path; ?>">
                <img class="gallery-thumb" src="<?= $full_img_path; ?>" alt="<?= htmlspecialchars($img['image_name']); ?>"
                  loading="lazy">
              </div>
            </div>

            <?php
          }
        } else {
          echo "<div class='col-12'><p class='text-center'>No images uploaded yet.</p></div>";
        }
        ?>

      </div>
    </div>
  </section>

  <div class="modal fade" id="imgModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content"><img id="modalImg" src="" alt="Aradhya Agro Industries"></div>
    </div>
  </div>

  <script>
    document.querySelectorAll('.gallery-thumb-wrap').forEach(function (el) {
      el.addEventListener('click', function () {
        document.getElementById('modalImg').setAttribute('src', el.getAttribute('data-full'));
        new bootstrap.Modal(document.getElementById('imgModal')).show();
      });
    });
  </script>
  <!-- ============================================ -->
  <!-- ========== FOOTER ========== -->
  <!-- ============================================ -->
  <?php include("include/footer.php") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>