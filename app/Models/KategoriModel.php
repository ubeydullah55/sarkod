<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table      = 'kategoriler';  // Tablo adı
    protected $primaryKey = 'id';     // Birincil anahtar (Primary Key)

    protected $useAutoIncrement = true; // AUTO_INCREMENT aktif
    protected $allowedFields    = ['name']; // Güncellenebilir alanlar

    // Eğer kayıt zamanı tutuluyorsa (created_at, updated_at)
    protected $useTimestamps = false; // Eğer tarih sütunları varsa true yapabilirsin
}
