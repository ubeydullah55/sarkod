<?= view('include/header') ?>
<?= view('include/leftmenu') ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <?php if (session()->getFlashdata('message')): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('message') ?>
                            </div>
                        <?php endif; ?>
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Yeni Ürün</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <!-- Bilezikler -->
                        <form method="post" action="<?= site_url('admin/bileziksecim') ?>">
                            <div class="form-group">
                                <select class="form-control" id="bilezikSelect" name="bilezik_id">
                                    <option value="">Bilezik Seçin</option>
                                    <?php foreach ($bilezikler as $bilezik): ?>
                                        <option value="<?= esc($bilezik['id']) ?>"><?= esc($bilezik['name']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Detay Göster</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= view('include/footer') ?>
</main>
