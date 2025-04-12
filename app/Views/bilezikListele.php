<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Apple touch icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/assets/img/apple-icon.png') ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/assets/img/favicon.ico') ?>">

    <title>
        SAR Qr code Takip Sistemi
    </title>

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/assets/css/soft-ui-dashboard.css?v=1.1.0') ?>" rel="stylesheet" />

    <!-- Nepcha Analytics -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <style>
        .square-img {
            width: 100% !important;
            height: 500px !important;
            object-fit: cover !important;
            border-radius: 10px !important;
        }

        @media (max-width: 768px) {
            .square-img {
                height: 300px !important;
                /* Mobilde daha az dikey olması için */
            }
        }

        /* Daha küçük telefonlar (iPhone SE gibi) */
        @media (max-width: 480px) {
            .square-img {
                height: 300px !important;
                /* Küçük ekranlarda daha kompakt */
            }
        }

        .filter-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin: 15px auto;
            padding: 10px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: calc(100% - 20px);
            max-width: 400px;
            box-sizing: border-box;
        }

        .filter-container input {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border 0.3s;
            width: 100%;
        }

        .filter-container input:focus {
            border-color: rgb(209, 171, 101);
        }

        .filter-container button {
            padding: 10px;
            font-size: 16px;
            border: none;
            background: rgb(209, 171, 101);
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            white-space: nowrap;
        }

        .filter-container button:hover {
            background: rgb(209, 171, 101);
            transform: scale(1.05);
        }

        .filter-container button i {
            margin-right: 5px;
        }

        .stok-kodu {
            display: inline-block;
            background: #f0f0f0;
            /* Hafif gri arka plan */
            color: #333;
            /* Koyu gri yazı rengi */
            padding: 5px 10px;
            /* İç boşluk */
            border-radius: 5px;
            /* Köşeleri yuvarlak yap */
            font-size: 14px;
            /* Yazı boyutu */
            font-weight: bold;
            /* Kalın font */
            margin-top: 5px;
            /* Üstten boşluk */
        }
    </style>

</head>



<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="d-flex justify-content-center align-items-center col-6" style="height: 100px;">
                <img src="https://sarkod.com.tr/assets/assets/img/logo-ct-dark.png"
                    alt="main_logo"
                    style="max-width: 200px; height: auto;">
            </div>
            <div class="col-3"></div>
            <div class="col-md-12">
                <form id="searchForm" class="filter-container">
                    <input type="text" id="searchInput" placeholder="Model adı ara...">
                    <button type="submit">
                        <i class="fas fa-search"></i> Ara
                    </button>
                </form>
                <div id="activeFilterContainer" style="text-align: center; margin-top: 10px;"></div>
                <div class="card">


                    <div class="card-header pb-0 px-3">

                        <!-- Arama Formu -->

                        <ul style="list-style-type: none; padding: 0; margin: 0; display: flex; justify-content: center; gap: 20px;">
                            <li style="cursor: pointer;" onclick="filterByCategory('mega')">Mega</li>
                            <li style="cursor: pointer;" onclick="filterByCategory('ajda')">Ajda</li>
                            <li style="cursor: pointer;" onclick="filterByCategory('şarnel')">Şarnel</li>
                            <li style="cursor: pointer;" onclick="filterByCategory('burma')">Burma</li>
                            <li style="cursor: pointer;" onclick="filterByCategory('örgü')">Örgü</li>
                            <li style="cursor: pointer;" onclick="filterByCategory('hasır')">Hasır</li>
                        </ul>

                        <div class="card-body pt-4 p-3">
                            <!-- Bilezikler -->
                           <!-- ... HEAD kısmı aynı şekilde kalıyor ... -->

<!-- Bilezik Kartları -->
<div class="row">
<?php foreach ($bilezikler as $bilezik): ?>
    <div class="col-12 col-sm-4  mb-4 bilezik-card"
         data-name="<?= strtolower($bilezik['model_adi']); ?>"
         data-stok="sar<?= $bilezik['id']; ?>"
         data-category="<?= strtolower($bilezik['kategori_adi'] ?? '') ?>"> <!-- Kategori eklendi -->
        <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1 text-center">
                <a href="javascript:;" class="d-block" data-bs-toggle="modal" data-bs-target="#imageModal<?= $bilezik['id']; ?>">
                    <img src="https://sarkod.com.tr/products/<?= $bilezik['resim'] ?>" class="img-fluid border-radius-lg square-img">
                </a>
            </div>
            <div class="card-body pt-2 pb-0">
                <a href="javascript:;" class="card-title h5 d-block text-darker text-center">
                    <?= $bilezik['model_adi']; ?>
                    <br>
                    <p class="stok-kodu">SAR<?= $bilezik['id']; ?></p>
                </a>
            </div>
            <p class="stok text-center"><?= isset($bilezik['kategori_adi']) ? $bilezik['kategori_adi'] : 'Kategori Yok'; ?></p>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="imageModal<?= $bilezik['id']; ?>" tabindex="-1" aria-labelledby="imageModalLabel<?= $bilezik['id']; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $bilezik['model_adi']; ?></h5>
                    <button style="filter: invert(23%) sepia(94%) saturate(7485%) hue-rotate(200deg) brightness(90%) contrast(120%);" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://sarkod.com.tr/products/<?= $bilezik['resim'] ?>" class="img-fluid" alt="Bilezik Resmi">
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>

                        </div>

                    </div>
                </div>
            </div>

            <script>
                document.getElementById('searchForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Sayfanın yenilenmesini engelle

                    var searchTerm = document.getElementById('searchInput').value.trim().toLowerCase(); // Kullanıcı girişini al
                    var cards = document.querySelectorAll('.bilezik-card'); // Tüm bilezik kartlarını seç

                    cards.forEach(function(card) {
                        var cardName = card.getAttribute('data-name').toLowerCase(); // Model adı
                        var cardStok = card.getAttribute('data-stok').toLowerCase(); // Stok kodu

                        // Eğer aranan kelime ürün adında veya stok kodunda varsa göster
                        if (cardName.includes(searchTerm) || cardStok.includes(searchTerm)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            </script>

            <!-- Bootstrap JS ve Popper.js CDN (Eğer yüklenmemişse) -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

        </div>
    </div>




    <footer class="footer pt-3">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © 2025,
                        made with <i class="fa fa-heart"></i> by
                        <a href="http://www.ubeydullahdogan.com.tr" class="font-weight-bold" target="_blank">Ubeydullah Dogan</a>
                        for a better web.Versiyon no: <b>1.06</b>
                    </div>
                </div>
                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </footer>
    </div>
</main>



<!--   Core JS Files   -->
<script src="<?= base_url('assets/assets/js/core/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/assets/js/core/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/assets/js/plugins/chartjs.min.js') ?>"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<script>
function filterByCategory(category) {
    var cards = document.querySelectorAll('.bilezik-card');

    cards.forEach(function(card) {
        var cardCategory = card.getAttribute('data-category').toLowerCase();

        if (category === 'all' || cardCategory.includes(category)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });

    // Aktif filtre etiketini göster
    var activeFilterContainer = document.getElementById('activeFilterContainer');
    activeFilterContainer.innerHTML = `
        <span style="
            display: inline-block;
            background: #d1ab65;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
            margin-top: 10px;
        ">
            ${category.charAt(0).toUpperCase() + category.slice(1)}
            <span onclick="clearFilter()" style="
                margin-left: 10px;
                cursor: pointer;
                font-weight: bold;
                color: #fff;
            ">&times;</span>
        </span>
    `;
}
function clearFilter() {
    // Tüm kartları göster
    var cards = document.querySelectorAll('.bilezik-card');
    cards.forEach(function(card) {
        card.style.display = 'block';
    });

    // Filtre etiketini temizle
    document.getElementById('activeFilterContainer').innerHTML = '';
}

</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('assets/assets/js/soft-ui-dashboard.min.js?v=1.1.0') ?>"></script>
</body>

</html>