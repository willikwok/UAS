<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pembayarans';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['deskripsi_produk', 'jumlah_pembelian', 'total_harga', 'id_transaksi'];

    
}
