<?= view('include/header') ?>
<?= view('include/leftmenu') ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Sipariş Kayıt</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <!-- Hata mesajı varsa, göster -->
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <!-- Form Başlangıcı -->
                        <form method="POST" action="<?= site_url('admin/siparisOlusturSave') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <!-- Bilezik Resmi -->
                                <div class="col-2"></div>
                                <div class="col-4">
                                <h6 class="text-uppercase text-secondary" style="text-align: center;">Bizdeki Model</h6>
                                    <div class="position-relative text-center">
                                        <a class="d-block">
                                            <img src="products/default-bilezik.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-md" id="bilezikUpdateResimPreview">
                                        </a>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                <h6 class="text-uppercase text-secondary" style="text-align: center;">Müşteri Resmi</h6>
                                    <div class="position-relative text-center">
                                        <a class="d-block">
                                            <!-- Varsayılan Resim ve Resim Önizleme -->
                                            <img src="products/default-bilezik.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-md" id="bilezikResimPreview">
                                        </a>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="bilezikResim">Müşteri Bilezik Resmi Yükle</label>
                                        <input type="file" class="form-control" id="bilezikResim" name="bilezik_resim" accept="image/*" onchange="previewImage(event)">
                                    </div>
                                </div>
                                <div class="col-2"></div>

                                <!-- Gizli input ile bilezik_id'yi gönderiyoruz -->
                                <input type="hidden" name="bilezik_id" value="0"> <!-- Burada 0 geçici bir bilezik_id yerine kullanılabilir -->

                                <!-- Bilezik Detayları -->
                                <div class="col-md-12 mt-4">
                                    <h6 class="text-uppercase text-secondary">Detaylar</h6>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bilezik" class="form-control-label">Bilezik Modeli</label>
                                        <select class="form-control select2" id="bilezik" name="bilezik_id" onchange="updatePreviewImage()">
                                            <option value="0" data-resim="<?= base_url('products/default-bilezik.jpg') ?>">Bilezik Adı</option>
                                            <?php foreach ($bilezikler as $bilezik): ?>
                                                <option value="<?= $bilezik['id'] ?>"
                                                    data-resim="<?= !empty($bilezik['resim']) ? base_url('products/' . $bilezik['resim']) : base_url('products/default-bilezik.jpg') ?>">
                                                    <?= $bilezik['name'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firmaAdı" class="form-control-label">Firma Adı</label>
                                        <input type="text" class="form-control" id="firmaAdı" name="firmaAdı" placeholder="Firma Adı Girin" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bilezikGr" class="form-control-label">Gram</label>
                                        <input type="number" class="form-control" id="bilezikGr" name="bilezikGr" placeholder="Gram Giriniz" step="0.1" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bilezikAdet" class="form-control-label">Adet</label>
                                        <input type="number" class="form-control" id="bilezikAdet" name="bilezikAdet" placeholder="Adet Giriniz" step="1" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bilezikMilim" class="form-control-label">Milim</label>
                                        <input type="number" class="form-control" id="bilezikMilim" name="bilezikMilim" placeholder="Bitiş Genişlik Girin" step="1" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="siparisNot" class="form-control-label">Not</label>
                                        <input type="text" class="form-control" id="siparisNot" name="siparisNot" placeholder="Varsa Not Giriniz">
                                    </div>
                                </div>


                                <!-- Model Seçimi -->


                                <!-- Bilezik Resmi -->

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            closeOnSelect: false
        });
    });
</script>
<script>
    // Resim Yükleme Önizleme Fonksiyonu
    function previewImage(event) {
        var output = document.getElementById('bilezikResimPreview');
        output.src = URL.createObjectURL(event.target.files[0]);
    }
</script>


<script>
    function updatePreviewImage() {
        var selectBox = document.getElementById("bilezik");
        var selectedOption = selectBox.options[selectBox.selectedIndex];
        var newImageSrc = selectedOption.getAttribute("data-resim");

        console.log("Seçilen Model ID:", selectedOption.value);
        console.log("Seçilen Resim Yolu:", newImageSrc);

        // Eğer resim null veya boşsa varsayılan resmi ata
        if (!newImageSrc || newImageSrc === "null") {
            newImageSrc = "<?= base_url('products/default-bilezik.jpg') ?>";
        }

        document.getElementById("bilezikUpdateResimPreview").src = newImageSrc;
    }
</script>