<?= view('include/header') ?>
<?= view('include/leftmenu') ?>
<form id="searchForm" class="filter-container" method="POST" action="<?= site_url('admin/siparisbarkodIncele') ?>">
                  <input type="text" class="form-control" value="0" id="myInput" name="barkod">
                    <button type="submit">
                        <i class="fas fa-search"></i> Ara
                    </button>
                </form>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                 

                    <div class="card-body pt-4 p-3">
                        <!-- Başarı mesajı -->
                        <?php if (session()->getFlashdata('message')): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('message') ?>
                            </div>
                        <?php endif; ?>
                        <!-- Eğer sipariş verisi gelmediyse hata mesajı göster -->
                        <?php if (empty($siparis)): ?>
                            <div class="alert alert-danger">
                                Sipariş bulunamadı.
                            </div>
                        <?php else: ?>

                            <div class="row">
                                <!-- Bilezik Resmi -->
                                <div class="col-2">

                                </div>
                                <div class="col-md-4">
    <div class="position-relative text-center">
        <h6 class="text-uppercase text-secondary">Müşteri Resmi</h6>
        <a href="<?= base_url('customerProducts/' . $bilezik['resim']) ?>" target="_blank">
            <img src="<?= base_url('customerProducts/' . $bilezik['resim']) ?>" alt="Müşteri Resmi" class="img-fluid shadow border-radius-md">
        </a>
    </div>
</div>

<div class="col-md-4">
    <div class="position-relative text-center">
        <h6 class="text-uppercase text-secondary">Bizdeki Model</h6>
        <a href="<?= base_url('products/' . $bilezik['resim']) ?>" target="_blank">
            <img src="<?= base_url('products/' . $bilezik['resim']) ?>" alt="Bizdeki Model" class="img-fluid shadow border-radius-md">
        </a>
    </div>
</div>

                            
                                <div class="col-2">


                                </div>


                                <?php if (!empty($bilezik)): ?>
                                    <div class="col-md-12 mt-4">

                                        <h6 class="text-uppercase text-secondary" style="text-align: center;">Sipariş Detayları</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bilezikAd" class="form-control-label">Bilezik Adı</label>
                                            <input type="text" class="form-control" id="bilezikAd" name="bilezik_ad" value="<?= esc($bilezik['name']) ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bilezikAd" class="form-control-label">Firma Adı</label>
                                            <input type="text" class="form-control" id="bilezikAd" name="bilezik_ad" value="Vizyon Kuyumcu" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bilezikAd" class="form-control-label">Sipariş Tarihi</label>
                                            <input type="text" class="form-control" id="bilezikAd" name="bilezik_ad" value="25.09.2025 13:42" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bilezikBasGr" class="form-control-label">Gram</label>
                                            <input type="text" class="form-control" id="bilezikBasGr" name="bilezik_bas_gr" value="<?= esc($bilezik['bas_gr']) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bilezikBitGr" class="form-control-label">Adet</label>
                                            <input type="text" class="form-control" id="bilezikBitGr" name="bilezik_bas_gen" value="<?= esc($bilezik['bas_gen']) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bilezikBitGr" class="form-control-label">Milim</label>
                                            <input type="text" class="form-control" id="bilezikBitGr" name="bilezik_bas_gen" value="<?= esc($bilezik['bas_gen']) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="bilezikCNC" class="form-control-label">CNC</label>
                                            <input type="text" class="form-control" id="bilezikCNC" name="bilezik_cnc" value="<?= esc($bilezik['cnc']) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="bilezikCNC" class="form-control-label">Not</label>
                                            <input type="text" class="form-control" id="bilezikCNC" name="bilezik_cnc" value="Gün içinde tamamlanmasını rica ediyoruz." readonly>
                                        </div>
                                    </div>
                                <?php endif; ?>




                                <!-- Bilezik Detayları -->

                            </div>

                            <!-- Ekstra Alanlar -->

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= view('include/footer') ?>
</main>