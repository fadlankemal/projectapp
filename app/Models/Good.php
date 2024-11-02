<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Good extends Model
{
    use HasFactory;

    protected $table = 'goods';
    protected $guarded = ['id'];


    public $fillable = [
        'nama_barang',
        'tipe_barang',
        'merek_barang',
        'stok',
        'stok_alert',
        'code',
        'rak_barang',
        'nomor_barang',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    use Searchable;
    public function toSearchableArray()
    {
        return [
            'nama_barang' => $this->nama_barang,
            'tipe_barang' => $this->tipe_barang
        ];
    }

    
    public function movement() :HasMany
    {
        return $this->hasMany(Movement::class);
    }
}
