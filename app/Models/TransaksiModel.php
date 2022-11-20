<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pembeli', 'id_barang', 'jumlah', 'total_harga', 'created_by', 'created_date', 'updated_by', 'updated_date', 'alamat', 'ongkir', 'status'];

    protected $returnType = 'App\Entities\Transaksi';
    protected $useTimeStamps = false;
}
