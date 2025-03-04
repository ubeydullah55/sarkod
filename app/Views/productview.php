<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SAR QR </title>
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'><link rel="stylesheet"  href="<?= base_url('assets/front/style.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="icon" type="image/png" href="<?= base_url('assets/assets/img/favicon.ico') ?>">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        
      <img src="<?= base_url('products/' . $bilezik['resim']) ?>" alt="bilezik">
      </div>
      <div class="blog-slider__content">
        <div>
          <div>
            <img src="<?= base_url('assets/assets/img/logo-ct-dark.png') ?>" class="blog-slider__logo" alt="main_logo">
          </div>   
        </div>
        <div class="blog-slider__title"><?= esc($bilezik['name']) ?></div>
        <div class="blog-slider__text">Bu ürün <b><i style="color: rgba(209, 171, 101, 1);">Samsun Altın Rafineri</i></b> tarafından üretilmiştir... </div>
        <div style="display: inline-flex; flex-direction: column; gap: 5px;">
        <div class="blog-slider__text" style="margin-bottom: 0;">Sipariş Id: <?= esc($siparis['id']) ?></div>
          
          <!--  <div class="blog-slider__text" style="margin-bottom: 0;">Ağırlık: <?= esc($siparis['agirlik']) ?>gr</div>
              <div class="blog-slider__text" style="margin-bottom: 0;">Genişlik: <?= esc($siparis['genislik']) ?>cm</div> -->
            <div class="blog-slider__text" style="margin-bottom: 0;">Üretim Tarihi: <?= esc($formattedDate) ?></div>
        </div>
        <div class="blog-slider__social-icons">
          <a href="https://www.instagram.com/bilezikcilik/" target="_blank" class="social-icon">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/samsunaltinrafineri/?locale=tr_TR" target="_blank" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.saraltin.com/" target="_blank" class="social-icon">
            <i class="fas fa-globe"></i>
          </a>
        </div>
             <p style="font-size: 8px; color: #888; text-align: center;">
    <strong>Ürün Temsili ve Sorumluluk:</strong><br>
    Ürün görselleri temsili olup, gramaj farkı nedeniyle görsel ile fiziksel ürün arasında küçük farklılıklar olabilir. Ayrıca, sonradan oluşabilecek değişikliklerden firmamız sorumlu değildir.
</p>
      </div>
     
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="<?= base_url('products/' . $bilezik['resim']) ?>" alt="bilezik">
      </div>
      <div class="blog-slider__content">
        <div> <img src="<?= base_url('assets/assets/img/logo-ct-dark.png') ?>" class="blog-slider__logo" alt="main_logo"></div>
        <div class="blog-slider__title"><?= esc($bilezik['name']) ?></div>
        <div class="blog-slider__text">Bu ürün <b><i style="color: rgba(209, 171, 101, 1);">Samsun Altın Rafineri</i></b> tarafından üretilmiştir... </div>
        <div style="display: inline-flex; flex-direction: column; gap: 5px;">
        <div class="blog-slider__text" style="margin-bottom: 0;">Sipariş Id: <?= esc($siparis['id']) ?></div>
          
          <!--  <div class="blog-slider__text" style="margin-bottom: 0;">Ağırlık: <?= esc($siparis['agirlik']) ?>gr</div>
            <div class="blog-slider__text" style="margin-bottom: 0;">Genişlik: <?= esc($siparis['genislik']) ?>cm</div> -->
            <div class="blog-slider__text" style="margin-bottom: 0;">Üretim Tarihi: <?= esc($formattedDate) ?></div>
        </div>
        <div class="blog-slider__social-icons">
          <a href="https://www.instagram.com/bilezikcilik/" target="_blank" class="social-icon">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/samsunaltinrafineri/?locale=tr_TR" target="_blank" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.saraltin.com/" target="_blank" class="social-icon">
            <i class="fas fa-globe"></i>
          </a>
        </div>
            <p style="font-size: 8px; color: #888; text-align: center;">
    <strong>Ürün Temsili ve Sorumluluk:</strong><br>
    Ürün görselleri temsili olup, gramaj farkı nedeniyle görsel ile fiziksel ürün arasında küçük farklılıklar olabilir. Ayrıca, sonradan oluşabilecek değişikliklerden firmamız sorumlu değildir.
</p>
      </div>
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
      <img src="<?= base_url('products/' . $bilezik['resim']) ?>" alt="bilezik">
      </div>
      <div class="blog-slider__content">
        <div>  <img src="<?= base_url('assets/assets/img/logo-ct-dark.png') ?>" class="blog-slider__logo" alt="main_logo"></div>
        <div class="blog-slider__title"><?= esc($bilezik['name']) ?></div>
        <div class="blog-slider__text">Bu ürün <b><i style="color: rgba(209, 171, 101, 1);">Samsun Altın Rafineri</i></b> tarafından üretilmiştir... </div>
        <div style="display: inline-flex; flex-direction: column; gap: 5px;">
        <div class="blog-slider__text" style="margin-bottom: 0;">Sipariş Id: <?= esc($siparis['id']) ?></div>
          <!--  <div class="blog-slider__text" style="margin-bottom: 0;">Ağırlık: <?= esc($siparis['agirlik']) ?>gr</div>
            <div class="blog-slider__text" style="margin-bottom: 0;">Genişlik: <?= esc($siparis['genislik']) ?>cm</div> -->
            <div class="blog-slider__text" style="margin-bottom: 0;">Üretim Tarihi: <?= esc($formattedDate) ?></div>
        </div>
        <div class="blog-slider__social-icons">
          <a href="https://www.instagram.com/bilezikcilik/" target="_blank" class="social-icon">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/samsunaltinrafineri/?locale=tr_TR" target="_blank" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.saraltin.com/" target="_blank" class="social-icon">
            <i class="fas fa-globe"></i>
          </a>
          
        </div>
        <p style="font-size: 8px; color: #888; text-align: center;">
    <strong>Ürün Temsili ve Sorumluluk:</strong><br>
    Ürün görselleri temsili olup, gramaj farkı nedeniyle görsel ile fiziksel ürün arasında küçük farklılıklar olabilir. Ayrıca, sonradan oluşabilecek değişikliklerden firmamız sorumlu değildir.
</p>

      </div>
    </div>
    
  </div>
  <div class="blog-slider__pagination"></div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="<?= base_url('assets/front/script.js') ?>"></script>

</body>
</html>
