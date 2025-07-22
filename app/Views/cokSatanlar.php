<?= view('include/header') ?>
<?= view('include/leftmenu') ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <!-- Sol tarafta tüm bilezikler -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Tüm Bilezikler</h6>
                    </div>
                    <div class="card-body">
                        <select class="form-control" id="bilezikSelect">
                            <option value="">Bilezik Seçin</option>
                            <?php foreach ($bilezikler as $bilezik): ?>
                                <option value="<?= esc($bilezik['id']) ?>"><?= esc($bilezik['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button id="ekleBtn" class="btn btn-primary mt-3">Trend Listeye Ekle</button>
                    </div>
                </div>
            </div>

            <!-- Sağ tarafta trend bilezikler listesi -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Trend Liste</h6>
                    </div>
                    <div class="card-body">
                      <ul id="trendList" class="list-group">
    <?php foreach ($trendler as $trend): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center" data-id="<?= esc($trend['id']) ?>">
            <?= esc($trend['name']) ?>
            <div>
                <button class="btn btn-sm btn-secondary btn-move-up me-1">↑</button>
                <button class="btn btn-sm btn-secondary btn-move-down me-1">↓</button>
                <button class="btn btn-sm btn-danger btn-delete">Sil</button>
            </div>
        </li>
    <?php endforeach; ?>
</ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?= view('include/footer') ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Eğer yoksa ekle -->
<script>
    $('#ekleBtn').on('click', function () {
        const bilezikID = $('#bilezikSelect').val();

        if (!bilezikID) {
            alert('Lütfen bir bilezik seçin.');
            return;
        }

        // Ajax ile gönder
        $.ajax({
            url: "<?= site_url('admin/trendEkle') ?>",
            type: "POST",
            data: {
                bilezik_id: bilezikID
            },
            success: function (response) {
                location.reload(); // Sayfayı yenileyip listeyi güncelle
            },
            error: function () {
                alert('Trend listesine eklenirken bir hata oluştu.');
            }
        });
    });


$(document).ready(function() {
    // Silme işlemi
    $('#trendList').on('click', '.btn-delete', function() {
        const li = $(this).closest('li');
        const id = li.data('id');

        if (!confirm('Bu bileziği trend listesinden silmek istediğine emin misin?')) return;

        $.post("<?= site_url('admin/trendSil') ?>", { id: id })
            .done(function(res) {
                if (res.success) {
                    li.remove();
                    alert('Silindi');
                    // İstersen sıra güncelleme de yapabilirsin
                } else alert('Silme hatası');
            })
            .fail(function() {
                alert('Silme isteği başarısız');
            });
    });

    // Yukarı taşıma
    $('#trendList').on('click', '.btn-move-up', function() {
        const li = $(this).closest('li');
        const prev = li.prev();
        if (prev.length) {
            li.insertBefore(prev);
            updateSira();
        }
    });

    // Aşağı taşıma
    $('#trendList').on('click', '.btn-move-down', function() {
        const li = $(this).closest('li');
        const next = li.next();
        if (next.length) {
            li.insertAfter(next);
            updateSira();
        }
    });

    // Sıralamayı güncelle (Ajax ile veritabanına gönder)
    function updateSira() {
        let data = [];
        $('#trendList li').each(function(index) {
            data.push({ id: $(this).data('id'), sira: index + 1 });
        });

        $.ajax({
            url: "<?= site_url('admin/trendSiraGuncelle') ?>",
            type: "POST",
            contentType: "application/json",
            data: JSON.stringify(data),
            success: function(res) {
                if (res.success) {
                    // Başarılı güncelleme, istersen alert koyabilirsin
                    console.log('Sıralama güncellendi');
                } else {
                    alert('Sıralama güncellenirken hata oluştu');
                }
            },
            error: function() {
                alert('Sıralama güncelleme isteği başarısız');
            }
        });
    }
});


</script>


</main>
