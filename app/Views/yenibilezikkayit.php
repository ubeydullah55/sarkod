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
                        <!-- Hata mesajı varsa, göster -->
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <!-- Form Başlangıcı -->
                        <form method="POST" action="<?= site_url('admin/yeniSiparisSave') ?>">
                            <div class="row">
                                <!-- Bilezik Resmi -->
                                <div class="col-4"></div>
                                <div class="col-md-4">
                                    <div class="position-relative text-center">
                                        <a class="d-block">
                                        <img src="<?= base_url('products/' . esc($bilezik['resim'])) ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-md">

                                        </a>
                                    </div>
                                </div>
                                <div class="col-4"></div>

                                <!-- Gizli input ile bilezik_id'yi gönderiyoruz -->
                                <input type="hidden" name="bilezik_id" value="<?= esc($bilezik['id']) ?>">

                                <!-- Bilezik Detayları -->
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
                                        <input type="text" class="form-control" id="bilezikBasGr" name="bilezikgr" value="<?= esc($bilezik['bas_gr']) ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bilezikBitGr" class="form-control-label">Genişlik</label>
                                        <input type="text" class="form-control" id="bilezikBitGr" name="bilezikgenislik" value="<?= esc($bilezik['bas_gen']) ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="bilezikCNC" class="form-control-label">CNC</label>
                                        <input type="text" class="form-control" id="bilezikCNC" name="bilezik_cnc" value="<?= esc($bilezik['cnc']) ?>">
                                    </div>
                                </div>

                                <!-- Kaydet Butonu -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Kaydet</button>
                                </div>
                            </div>
                        </form>
                        <!-- Form Bitişi -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= view('include/footer') ?>
</main>