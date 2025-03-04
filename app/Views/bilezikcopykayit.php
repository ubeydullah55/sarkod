<?= view('include/header') ?>
<?= view('include/leftmenu') ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Bilezik Kayıt</h6>
                     
                    </div>
                    <div class="card-body pt-4 p-3">
                        <!-- Eğer sipariş verisi gelmediyse hata mesajı göster -->
                        <?php if (empty($siparis)): ?>
                            <div class="alert alert-danger">
                                Sipariş bulunamadı.
                            </div>
                        <?php else: ?>
                            <form method="POST" action="<?= site_url('admin/copykayit') ?>">
                                <div class="row">
                                    <!-- Bilezik Resmi -->
                                    <div class="col-4"></div>
                                    <div class="col-md-4">
                                        <div class="position-relative text-center">
                                            <a class="d-block">
                                            <img src="<?= base_url('products/' . $bilezik['resim']) ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-md">

                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                    </div>

                                    <!-- Gizli input ile bilezik_id'yi gönderiyoruz -->
                            <input type="hidden" name="bilezik_id" value="<?= esc($siparis['bilezik_id']) ?>">
                                    <?php if (!empty($bilezik)): ?>
                                        <div class="col-md-12 mt-4">
                                        
                                            <h6 class="text-uppercase text-secondary">Detaylar</h6>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="bilezikAd" class="form-control-label">Bilezik Adı</label>
                                                <input type="text" class="form-control" id="bilezikAd" name="bilezik_ad" value="<?= esc($bilezik['name']) ?>" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bilezikBasGr" class="form-control-label">Gram</label>
                                                <input type="number" class="form-control" id="bilezikBasGr" name="bilezikgr" value="<?= esc($siparis['agirlik']) ?>" step="0.01" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bilezikBitGr" class="form-control-label">Genişlik</label>
                                                <input type="number" class="form-control" id="bilezikBitGr" name="bilezikgenislik" value="<?= esc($siparis['genislik']) ?>" step="0.01">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="bilezikCNC" class="form-control-label">CNC</label>
                                                <input type="text" class="form-control" id="bilezikCNC" name="bilezik_cnc" value="<?= esc($siparis['cnc']) ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Sipariş Detayları -->
                                  
                                    
                                 

                                    <!-- Bilezik Detayları -->
                               
                                </div>

                                <!-- Ekstra Alanlar -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Kaydet</button>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= view('include/footer') ?>
</main> 