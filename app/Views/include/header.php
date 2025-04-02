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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('assets/assets/css/soft-ui-dashboard.css?v=1.1.0') ?>" rel="stylesheet" />
  
  <!-- Nepcha Analytics -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  
  <style>
.square-img {
    width: 100%;
    height: 400px; /* Masaüstü için standart yükseklik */
    object-fit: cover;
    border-radius: 10px;
}

/* Mobil uyumlu hale getirmek için */
@media (max-width: 767px) {
    .square-img {
        height: 300px; /* Mobilde resmin boyutunu küçültüyoruz */
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
    border-color:rgb(209, 171, 101);
}

.filter-container button {
    padding: 10px;
    font-size: 16px;
    border: none;
    background:rgb(209, 171, 101);
    color: white;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
    white-space: nowrap;
}

.filter-container button:hover {
    background:rgb(209, 171, 101);
    transform: scale(1.05);
}

.filter-container button i {
    margin-right: 5px;
}
.select2-hidden-accessible {
            border: 0 !important;
            clip: rect(0 0 0 0) !important;
            height: 1px !important;
            margin: -1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            width: 1px !important;
        }

        .select2-container--default .select2-selection--single,
        .select2-selection .select2-selection--single {
            border: 1px solid #d2d6de;
            border-radius: 4px !important;
            padding: 6px 12px;
            height: 40px !important;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 4px;
        }

        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 40px;
            user-select: none;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            padding-right: 10px;
            color: #444;
            line-height: 28px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 26px;
            position: absolute;
            top: 6px !important;
            right: 1px;
            width: 20px;
        }

</style>

</head>
