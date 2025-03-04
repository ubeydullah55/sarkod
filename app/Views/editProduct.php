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
                        <form method="POST" action="<?= site_url('admin/productEditSave/'. $bilezik['id']) ?>" enctype="multipart/form-data">
                            <div class="row">
                                <!-- Bilezik Resmi -->
                                <div class="col-4"></div>
                                <div class="col-md-4">
                                    <div class="position-relative text-center">
                                        <a class="d-block">
                                            <!-- Varsayılan Resim ve Resim Önizleme -->
                                            <img src="<?= base_url('products/' . $bilezik['resim']) ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-md" id="bilezikResimPreview">
                                        </a>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="bilezikResim">Bilezik Resmi Yükle</label>
                                        <input type="file" class="form-control" id="bilezikResim" name="bilezik_resim" accept="image/*" onchange="previewImage(event)">
                                    </div>
                                </div>
                                <div class="col-4"></div>

                                <!-- Gizli input ile bilezik_id'yi gönderiyoruz -->
                                <input type="hidden" name="bilezik_id" value="0"> <!-- Burada 0 geçici bir bilezik_id yerine kullanılabilir -->

                                <!-- Bilezik Detayları -->
                                <div class="col-md-12 mt-4">
                                    <h6 class="text-uppercase text-secondary">Detaylar</h6>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="bilezikAd" class="form-control-label">Bilezik Adı</label>
                                        <input type="text" class="form-control" id="bilezikAd" name="bilezik_ad" placeholder="Bilezik Adını Girin" value="<?= esc($bilezik['name']) ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bilezikBasGr" class="form-control-label">Başlangıç Gramı</label>
                                        <input type="number" class="form-control" id="bilezikBasGr" name="bilezik_bas_gr" placeholder="Başlangıç Gramı Girin" step="0.01" value="<?= esc($bilezik['bas_gr']) ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bilezikBitGr" class="form-control-label">Bitiş Gramı</label>
                                        <input type="number" class="form-control" id="bilezikBitGr" name="bilezik_bit_gr" placeholder="Bitiş Gramı Girin" step="0.01" value="<?= esc($bilezik['bit_gr']) ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bilezikGenislik" class="form-control-label">Başlangıç Genişlik</label>
                                        <input type="number" class="form-control" id="bilezikGenislik" name="baslangic_bilezikgenislik" placeholder="Başlangıç Genişlik Girin" step="0.01" value="<?= esc($bilezik['bas_gen']) ?>" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bilezikGenislik" class="form-control-label">Bitiş Genişlik</label>
                                        <input type="number" class="form-control" id="bilezikGenislik" name="bitis_bilezikgenislik" placeholder="Bitiş Genişlik Girin" step="0.01" value="<?= esc($bilezik['bit_gen']) ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="bilezikCNC" class="form-control-label">CNC</label>
                                        <input type="text" class="form-control" id="bilezikCNC" name="bilezik_cnc" placeholder="CNC Bilgisini Girin" value="<?= esc($bilezik['cnc']) ?>" required>
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

<script>
    // Resim Yükleme Önizleme Fonksiyonu
    function previewImage(event) {
        var output = document.getElementById('bilezikResimPreview');
        output.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
