<?php

namespace App\Models;

use CodeIgniter\Model;

class BilezikModel extends Model
{
    protected $table = 'bilezikler';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'bas_gr',
        'bit_gr',
        'bas_gen',
        'bit_gen',
        'cnc',
        'resim',
        'kategori_id', // Yeni eklenen alan
        'sira'
    ];

    protected $useTimestamps = false;

    protected $validationRules = [
        'name'        => 'required|max_length[255]',
        'bas_gr'      => 'required|decimal',
        'bit_gr'      => 'required|decimal',
        'bas_gen'     => 'required|decimal',
        'bit_gen'     => 'required|decimal',
        'cnc'         => 'permit_empty|string',
        'resim'       => 'permit_empty|string',
        'kategori_id' => 'required|integer', // Eklenen kural
    ];

    protected $validationMessages = [
        'name' => [
            'required'    => 'İsim alanı zorunludur.',
            'max_length'  => 'İsim 255 karakterden uzun olamaz.'
        ],
        'bas_gr' => [
            'required'    => 'Başlangıç gramajı alanı zorunludur.',
            'decimal'     => 'Başlangıç gramajı geçerli bir sayı olmalıdır.'
        ],
        'bit_gr' => [
            'required'    => 'Bitiş gramajı alanı zorunludur.',
            'decimal'     => 'Bitiş gramajı geçerli bir sayı olmalıdır.'
        ],
        'bas_gen' => [
            'required'    => 'Başlangıç genişliği alanı zorunludur.',
            'decimal'     => 'Başlangıç genişliği geçerli bir sayı olmalıdır.'
        ],
        'bit_gen' => [
            'required'    => 'Bitiş genişliği alanı zorunludur.',
            'decimal'     => 'Bitiş genişliği geçerli bir sayı olmalıdır.'
        ],
        'kategori_id' => [
            'required'    => 'Kategori seçimi zorunludur.',
            'integer'     => 'Kategori ID’si geçerli bir sayı olmalıdır.'
        ],
        'resim' => [
            'permit_empty' => 'Resim alanı isteğe bağlıdır.'
        ]
    ];

    // BilezikModel.php içine en alta ekle:
public function getBileziklerWithKategori()
{
    return $this->select('bilezikler.*, kategoriler.name as kategori_adi')
                ->join('kategoriler', 'kategoriler.id = bilezikler.kategori_id','left')
                ->findAll();
}

}
