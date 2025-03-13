<?= view('include/header') ?>
<?= view('include/leftmenu') ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">

            <div class="col-md-12">
                <form id="searchForm" class="filter-container">
                    <input type="text" id="searchInput" placeholder="Model adı ara...">
                    <button type="submit">
                        <i class="fas fa-search"></i> Ara
                    </button>
                </form>

                <div class="card">
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Tüm Modeller</h6>
                        <!-- Arama Formu -->


                        <div class="card-body pt-4 p-3">
                            <!-- Bilezikler -->
                            <div class="row">
                                <?php foreach ($bilezikler as $bilezik): ?>
                                    <div class="col-12 col-sm-4  mb-4 bilezik-card" data-name="<?= strtolower($bilezik['name']); ?>"> <!-- Model adını küçük harflerle alıyoruz -->
                                        <div class="card">
                                            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1 text-center">
                                                <a href="javascript:;" class="card-title h5 d-block text-darker" style="clear: both; display: block; text-align:center;">
                                                    <?= $bilezik['name']; ?>
                                                </a>
                                                <a href="javascript:;" class="d-block" data-bs-toggle="modal" data-bs-target="#imageModal<?= $bilezik['id']; ?>">
    <img src="<?= base_url('products/' . $bilezik['resim']) ?>" class="img-fluid border-radius-lg square-img">
</a>
                                            </div>

                                            <div class="card-body pt-2">
                                                <div class="d-flex justify-content-center gap-3 mt-2">
                                                    <a href="<?= base_url('admin/edit/' . $bilezik['id']); ?>" class="card-title h5 text-darker">
                                                        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">DÜZENLE</span>
                                                    </a>
                                                    <a href="<?= base_url('admin/delete/' . $bilezik['id']); ?>" class="card-title h5 text-darker">
                                                        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">SİL</span>
                                                    </a>
                                                </div>
                                                <p class="card-description mb-4">
                                                    <?= $bilezik['cnc']; ?>
                                                </p>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Modal Yapısı -->
                                    <div class="modal fade" id="imageModal<?= $bilezik['id']; ?>" tabindex="-1" aria-labelledby="imageModalLabel<?= $bilezik['id']; ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered"> <!-- modal-lg ile modalı büyütüyoruz -->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="imageModalLabel<?= $bilezik['id']; ?>"> <?= $bilezik['name']; ?></h5>
                                                    <button style="filter: invert(23%) sepia(94%) saturate(7485%) hue-rotate(200deg) brightness(90%) contrast(120%);" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Burada tam boyutta resmi gösteriyoruz -->
                                                    <img src="<?= base_url('products/' . $bilezik['resim']) ?>" class="img-fluid" alt="Bilezik Resmi">

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
                    event.preventDefault(); // Formun sayfayı yenilemesini engelliyoruz

                    var searchTerm = document.getElementById('searchInput').value.trim().toLowerCase(); // Arama terimini alıyoruz ve boşluklardan temizliyoruz
                    var cards = document.querySelectorAll('.bilezik-card'); // Tüm bilezik kartlarını seçiyoruz

                    if (searchTerm === "") {
                        // Arama kutusu boşsa, tüm kartları gösteriyoruz
                        cards.forEach(function(card) {
                            card.style.display = 'block';
                        });
                    } else {
                        cards.forEach(function(card) {
                            var cardName = card.getAttribute('data-name').toLowerCase(); // Kartın model adını küçük harfe çeviriyoruz
                            if (cardName.includes(searchTerm)) {
                                card.style.display = 'block'; // Eğer model adı arama terimiyle eşleşiyorsa, kartı göster
                            } else {
                                card.style.display = 'none'; // Eşleşmiyorsa, kartı gizle
                            }
                        });
                    }
                });
            </script>

            <!-- Bootstrap JS ve Popper.js CDN (Eğer yüklenmemişse) -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

        </div>
    </div>


    <?= view('include/footer') ?>
</main>